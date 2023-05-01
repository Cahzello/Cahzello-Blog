<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Cahzello Blog

Welcome to Cahzello Blog, a blog application made with Laravel 10. This README file provides instructions for setting up the application.

# Setup Process

## Prerequisite

Before you begin, make sure you have the following software installed on your machine:

- PHP version at least `8.1.6`
- Composer version at least `2.5.1`
- NodeJs version at least `16.17.1`
- MySQL Database

## Installation

1. Clone this repository:
```
git clone https://github.com/Cahzello/Cahzello-Blog.git
```

2. Navigate to the repository directory:
```
cd Cahzello-blog
```

3. Install Composer dependencies:
```
composer install
```

4. Install Node.js dependencies:
```
npm install
```

5. Create a copy of the `.env.example` file and rename it to `.env`:

```
cp .env.example .env
```
6. Generate an app encryption key:

```
php artisan key:generate
```

7. Create a MySQL database for the application, with the name `cahzello_blog`.

<br>

8. Update the `.env` file with your MySQL database credentials (like database connection).

<br>

9. Migrate the database:

```
php artisan migrate
```
10. Seed the database:

```
php artisan db:seed
```

## Usage

To run Cahzello Blog, use the following command:

```
php artisan serve
```

Woala.. 
<br>
Now Cahzello Blog is ready to use in local development



# License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
