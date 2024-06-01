<?php

namespace App\AI;

use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;

class Chat
{
    protected array $messages = [];

    public function systemMessage(string $message): static
    {
        $this->messages[] = [
            'role' => 'system',
            'content' => $message
        ];

        $this->setMessages();

        return $this;
    }

    public function send(string $message): ?string
    {
        Storage::put('messages.json', json_encode([]));

        $this->messages[] = [
            'role' => 'user',
            'content' => $message
        ];

        $response = OpenAI::chat()->create([
            "model"    => "gpt-3.5-turbo",
            "messages" => $this->messages
        ])->choices[0]->message->content;

        if ($response) {
            $this->messages[] = [
                'role' => 'assistant',
                'content' => $response,
            ];
        }

        $this->setMessages();

        return $response;
    }

    public function reply(string $message): ?string
    {
        $this->setMessages();

        return $this->send($message);
    }

    public function messages()
    {
        return $this->messages;
    }

    public function setMessages()
    {
        if (!session('messages')) {
            session(['messages' => json_encode($this->messages, JSON_PRETTY_PRINT)]);
        } else {
            $sess = json_decode(session('messages'), true);
            $merge = array_merge($sess, $this->messages);
            session(['messages' => json_encode($merge, JSON_PRETTY_PRINT)]);
            $this->messages = json_decode(session('messages'), true);
        }
    }
}
