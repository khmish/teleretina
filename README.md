# teleretina


If you cloned it for the first time


composer install - install laravel dependencies

cp .env.example .env - make a copy of .env.example as .env

php artisan key:generate - to generate key for cloned project
change .env values - DB to be precise
Make a database (mysql)


If you just cloned OR database changed

php artisan migrate


Installing (node) dependencies


npm i - fresh (only for those who change node deps (Ibrahim))
OR

npm ci - as per package-lock.json


Building


npm run dev - development (unoptimized and dirty)
OR

npm run prod - production (optimized, minimized and cleaned)


Serving the project

php artisan serve
