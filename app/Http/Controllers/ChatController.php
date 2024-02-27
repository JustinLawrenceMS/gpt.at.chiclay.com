<?php

namespace App\Http\Controllers;

use App\AI\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat (Request $request) {
        $chat = new Chat();

        if ($request->post('is_reply') === true) {
            $response = $chat->reply(
                array_merge(
                    $request->post('user_request'),
                    $chat::messages
                )
            );
            return response()->json($response);
        } else {
            $response = $chat->send(
                $request->post('user_request')
            );
            return response()->json($response);
        }
    }
}
