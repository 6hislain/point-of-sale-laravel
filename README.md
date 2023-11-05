# Point of Sale (laravel)

Demo Point of Sale (POS) Laravel project, a powerful and user-friendly solution for managing your retail business. This project showcases the capabilities of Laravel, a popular PHP framework, in creating a seamless and efficient POS system. With this demo, you can explore features such as inventory management, sales tracking, and easy product catalog management.

## Requirements

-   php 7.4
-   composer 2
-   database: Sqlite, MySQL, or PostgreSQL
-   web browser
-   code editor
-   git

## Installation

### Composer and PHP

-   git clone https://github.com/6hislain/point-of-sale-laravel
-   cd point-of-sale-laravel
-   composer install
-   php artisan key:generate
-   rename _.env.example_ to _.env_
-   edit _.env_ to connect with your local database
-   php artisan migrate
-   php artisan serve

### Docker

reference https://mosesejim.hashnode.dev/how-to-host-your-laravel-app-on-render

## TODO

### Database Tables

-   [x] User
-   [x] Store
-   [x] Category
-   [x] Product
-   [x] Client
-   [x] Transaction
