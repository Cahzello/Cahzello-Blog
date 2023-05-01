<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Cahzello Blog

This is Cahzello Blog made with Laravel 10.

# Setup Process

## Prerequisite

PHP version at least 8.1.6,
<br>
Composer version at least 2.5.1

## Step

First, clone this repo 

```
git clone https://github.com/Cahzello/Cahzello-Blog.git
```

After you clone this repo, make you sure in the repo folder. then install composer dependencies

```
composer install
```

After finish installing composer dependencies, install npm dependecies

```
npm install
```

After finish installing npm dependencies, make copy the example dot env 

```
cp .env.example .env
```

Then after you finish making the copy of dot env, you can generate the app encryption key

```
php artisan key:generate
```

After you finish generate the app key, you can make the database for this project. 
<br>
The databse we use is MySQL.

You can create db with the name:
`cahzello_blog`

After done make the databse, you can change database configuration in `.env`. 
<br>
After that you can start the migration.
```
php artisan migrate
```
Then after migrate the db, you can seed the db:

```
php artisan db:seed
```

Woala.. 
<br>
Now Cahzello Blog is ready to use in local development



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
