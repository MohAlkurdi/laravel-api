# Laravel API

Basic API using laravel that include authentication

## Installation

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Create a `.env` file by copying `.env.example` and configuring it.
4. Run `php artisan key:generate` to generate an application key.
5. Run `php artisan migrate` to create the database schema.

## Usage

-   Run `php artisan serve` to start the development server.

## API Routes

### Authentication

-   **POST** `/api/register` - Register a new user.
-   **POST** `/api/login` - Log in a user.
-   **POST** `/api/logout` - Log out a user.

### Products

-   **GET** `/api/products` - Retrieve a list of products.
-   **POST** `/api/products` - Create a new product.
-   **GET** `/api/products/search/{name}` - Search for products by name.
-   **GET** `/api/products/{id}` - Retrieve a specific product by ID.
-   **PUT** `/api/products/{id}` - Update a specific product by ID.
-   **DELETE** `/api/products/{id}` - Delete a specific product by ID.
