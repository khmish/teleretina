# teleretina


#### If you cloned it for the first time

1. `composer install` - install laravel dependencies
1. `cp .env.example .env` - make a copy of .env.example as .env
1. `php artisan key:generate` - to generate key for cloned project
1. change .env values - DB to be precise
1. Make a database (mysql)

#### If you just cloned OR database changed

-   `php artisan migrate`

#### Installing (node) dependencies

-   `npm i` - fresh (only for those who change node deps (Ibrahim))
-   OR
-   `npm ci` - as per package-lock.json

#### Building

-   `npm run dev` - development (unoptimized and dirty)
-   OR
-   `npm run prod` - production (optimized, minimized and cleaned)

#### Serving the project

-   `php artisan serve`
