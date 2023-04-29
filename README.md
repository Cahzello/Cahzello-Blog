## Cahzello Blog

This is Cahzello Blog made with Laravel for author learning process

## Setup Process

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

'''
php artisan key:generate
'''

After you finish generate the app key, you can make the database for this project. 
The databse we use is MySQL.

You can create db with the name:
`cahzello_blog`

After make the db you can migrate the db:

```
php artisan migrate
```
Then after migrate the db, you can seed the db:

```
php artisan db:seed
```

Woala.. 
Now Cahzello Blog is ready to use in local development



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
