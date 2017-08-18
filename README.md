# Domainos

[![Latest Stable Version](https://poser.pugx.org/mojoblanco/domainos/v/stable)](https://packagist.org/packages/mojoblanco/domainos)
[![Total Downloads](https://poser.pugx.org/mojoblanco/domainos/downloads)](https://packagist.org/packages/mojoblanco/domainos)
[![Latest Unstable Version](https://poser.pugx.org/mojoblanco/domainos/v/unstable)](https://packagist.org/packages/mojoblanco/domainos)
[![License](https://poser.pugx.org/mojoblanco/domainos/license)](https://packagist.org/packages/mojoblanco/domainos)

A laravel package for allowing or blocking specific email domains

## Installation
Open your terminal or command prompt, go to the root directory of your Laravel project, then follow the following steps. 

1. Run
    ```
    composer require mojoblanco/domainos 
    ```

2. Add the provider to the providers array in config/app.php
    ```
    Mojoblanco\Domainos\DomainosServiceProvider::class,
    ```

3. Run ```composer dump-autoload```

4. Publish the config file
    ```
    php artisan vendor:publish --provider="Mojoblanco\Domainos\DomainosServiceProvider" --tag="config"
    ```

## Usage
1. Go to the `config/domainos.php` file and customize it. <br>There are two options;
<br>`block` is for blacklisting domains,
<br>`allow` is for whitelisting.

2. Go to the validation of the email address and add the following
```
'email' => 'domainos:allow'
```

3. Test the validation


### Notice
This package can be very useful when you want to prevent or allow specific email addresses during user registration.


### How can you thank me?
You can like this repo, follow me on [github](https://github.com/mojoblanco) and [twitter](https://twitter.com/themojoblanco)
Thanks.
