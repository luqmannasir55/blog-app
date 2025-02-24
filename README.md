Blog Web Application

Tech Stack

PHP (Laravel 11) - Sanctum, Breeze
MySQL
HTML
Tailwind CSS

Installation Guide

1. Clone this repo - https://github.com/luqmannasir55/blog-app on your local drive
2. Go to the folder application using cd command on your cmd or terminal
3. Run composer install on your cmd or terminal
4. Rename .env-example to .env
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run php artisan key:generate
7. Open another cmd or terminal, run composer require laravel/breeze --dev
8. Run php artisan breeze:install blade (You might need to copy and paste all content in this repo again as this installation might replace some files in your local)
9. Run php artisan migrate
10. Run php artisan serve
11. Open another cmd or terminal, run npm install
12. Run npm run dev 
13. Go to http://localhost:8000/
