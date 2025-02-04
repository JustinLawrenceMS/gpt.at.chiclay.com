# gpt.at.chiclay.com

Hobby Website with Vue frontend for OpenAI API aka UpGrokk.Com.  The backend is based on Jeffrey Way's fun-with-ai repo.  The frontend uses an HTML template called Landscape by Pixelarity.  The Chatbox itself is based on a Vue component designed by ChatGPT.  See it <a target="_blank" href="https://gpt.at.chiclay.com">here</a>.
## To install (local development)

Prereqs: You need Docker installed and running, and you need PHP installed on your local machine (^8.1)

Do this:
```
git clone git@github.com:JustinLawrenceMS/gpt.at.chiclay.com
cd gpt.at.chiclay.com
```
Save the file .env.example as .env and add your OpenAI secret along with any desired environment variables.

Now do this:
```
composer update
php artisan sail:install
```

Choose MySQL from the bash menu.

Now do this:

```
./vendor/bin/sail up
```

After the application loads, open another terminal and do this:
```
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate
./vendor/bin/sail npm i --legacy-peer-deps
./vendor/bin/sail npm run build
```
