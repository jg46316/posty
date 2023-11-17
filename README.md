#Install

Run composer install:

    composer install

Setup your environment:
   - rename .env.example file to .env
  

Bootstrap the application:

    php artisan key:generate
    php artisan migrate
    php artisan migrate:fresh --seed


 This is a Laravel 8 crash course that covers installation, authentication, routes, data, pagination, email functionality and much more.
