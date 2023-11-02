# Point of Sale (laravel)

Our Laravel-based point of sale (POS) app is a cutting-edge solution that simplifies and streamlines the retail experience for businesses of all sizes. With its intuitive user interface and robust functionality, our POS app allows you to effortlessly manage sales, inventory, and customer data. It offers real-time tracking of product availability, supports various payment methods, and generates detailed sales reports for informed decision-making. Built on the reliable Laravel framework, our POS app is highly customizable, ensuring it can adapt to your unique business needs. Whether you're running a brick-and-mortar store or an e-commerce platform, our POS app offers a seamless and efficient way to enhance your operations and provide an exceptional shopping experience for your customers.

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

-   User
-   Store
-   Category
-   Product
-   Client
-   Transaction
