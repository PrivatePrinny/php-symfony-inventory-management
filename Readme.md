# Inventory Management System

A simple inventory management web application built with Symfony.

## Description

This application was developed as part of a Rapid Application Development (RAD) test to evaluate the speed of building basic applications using various technologies and frameworks. It provides essential CRUD (Create, Read, Update, Delete) operations for managing inventory items.

## Features

- Create, view, edit, and delete inventory items
- Web-based user interface
- Database integration with Doctrine ORM
- Form validation and CSRF protection
- Responsive design with Twig templates

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Symfony CLI (optional, for easier development)
- A database server (e.g., MySQL, PostgreSQL)

### Steps

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd php-symfony-inventory-management
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure the environment:**
   - Copy `.env.example` to `.env` and update database credentials if necessary.

4. **Set up the database:**
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. **Start the development server:**
   ```bash
   symfony server:start
   ```
   Or using PHP's built-in server:
   ```bash
   php -S localhost:8000 -t public
   ```

## Usage

Once the server is running, access the application at `http://localhost:8000`. Navigate to the inventory section to manage items.

## Technologies Used

- **Symfony**: PHP framework for web applications
- **Doctrine**: ORM for database management
- **Twig**: Template engine
- **Asset Mapper**: For managing assets
- **PHPUnit**: For testing

## Testing

Run the test suite with:
```bash
./bin/phpunit
```
