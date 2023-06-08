## Composer

### symfony/dotenv

https://packagist.org/packages/symfony/dotenv

Symfony Dotenv parses .env files to make environment variables stored in them accessible via $_SERVER or $_ENV.

```
composer require symfony/dotenv
```


### symfony mailer

https://symfony.com/doc/current/mailer.html


```
composer require symfony/mailer
```

## autoload

Add this after the require brackets "}" 

```
,
    "autoload": {
        "psr-4": {"ADD_HERE_THE_NAME_OF_YOUR_NAMESPACE\\": "src"}
    }
``

Go to the index "directory" open terminal and add this:

```
composer dump-autoload
```

run that code every time you make changes related with routes

### Run the server

```
php -S 127.0.0.1:8080
```

The previous code came from the .env file in src folder

## FILES
**kernel/.env**
Here to add confidential details  like pw. So the person who will install this project, will have to name 2 