<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Library Management System

This project is a Library Management BackEnd System developed to manage the operations of a library efficiently. The system is built using php with Laravel Framework, providing functionalities to manage books, members, and library transactions.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- **Book Management**: Add, update, delete, and search for books.
- **Member Management**: Register new members, update member information, and delete members.
- **Transaction Management**: Issue books, return books, and track due dates.
- **Search Functionality**: Search for books by title, author, or ISBN.
- **User Authentication**: Secure login and role-based access control.

## Technologies Used

- **Laravel php framework**
- **MySQL**
- **blade template** 
- **Android, Java** (for frontend)

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Aya-Abouzaid/library.git

2. **Navigate to the project directory:**:
   ```bash
   cd library

3. **Install dependencies using Composer:**:
   ```bash
   composer install

4. **Set up environment variables:**:
 - Rename .env.example to .env.
 - Update .env file with your database credentials and other configuration settings.

5. **Import the database schema:**:
 - Create a new MySQL database for the application.
 - Import the database schema from database/schema.sql into your newly created database.

6. **Start the development server:**:
   ```bash
   php -S localhost:8000 -t public


   
