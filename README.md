<p align="center">
    <img src="https://user-images.githubusercontent.com/44909285/201471525-be424567-47a4-495d-a9b1-cd673cff0b23.svg" alt="Logo Laravel-Translations">
</p>

<p align="center">
    <a href="#introduction">Introduction</a> |
    <a href="#installation">Installation</a> |
    <a href="#usage">Usage</a> |
    <a href="#authorization">Authorization</a> |
    <a href="#upgrading">Upgrade</a> |
</p>

![Cover](https://user-images.githubusercontent.com/44909285/201598702-5bcd47ed-6202-41a1-af4a-40203b3b76ae.png)

### Introduction

Laravel Translations UI is a package that provides a simple and friendly user interface for managing translations in a Laravel app. With this package, you can easily add, edit, delete, and export translations, and use the search function to find specific translations.

> 📺 **[Watch a 4-minute video by Povilas Korop](https://www.youtube.com/watch?v=lYkgXnwnVbw)** showcasing the package.

### Requirements

- PHP 7.4 or higher
- Laravel 8.x or higher

#### Features

- View, create, and delete translations
- Manage translation keys
- Filter by translation keys or values
- Import and export translations
- Search function to find specific translations
- and more...

### Installation

To install Laravel Translations UI in your Laravel project, run the following command:

```bash
composer require outhebox/laravel-translations
```

After installing the package, you'll need to publish its assets by running the following command:

```bash
php artisan translations:install
```

Before you can import translations, you'll need to migrate your database. Run the following command to do so:

```bash
php artisan migrate
```

### Usage

To import your translations, run the following command:

```bash
php artisan translations:import
```

To import and overwrite all previous translations, use the following command:

```bash
php artisan translations:import --fresh
```

To access the translations UI, visit /translations in your browser. If you are using a production environment, you will need to login to your application before accessing the translations UI.

You can customize the authorization gate in the configuration file to control access to the translations UI in non-local environments. For more information, see for more details [Authorization](#authorization).

#### Exporting Translations

To export your translations, run the following command:

```bash
php artisan translations:export
```

### Authorization

By default, the Translations UI dashboard can only be accessed in the local environment. The authorization gate in the `app/Providers/TranslationsServiceProvider.php` file controls access to the Translations UI dashboard in non-local environments. You can modify this gate as needed to restrict access to your Translations UI installation.

To customize the authorization gate, you can define a closure in the gate method of the TranslationsServiceProvider class:

```php
protected function gate()
{
    Gate::define('viewLaravelTranslationsUI', function ($user) {
        return in_array($user->email, [
            // return true or false based on your authorization logic
        ]);
    });
}
```

### Upgrading

When upgrading to a new major version of Laravel Translations UI, it's important that you carefully review the upgrade guide.

In addition, when upgrading to any new Translations UI version, you should re-publish Translations UI assets:

```bash
php artisan translations:publish
```

To keep the assets up-to-date and avoid issues in future updates, you may add the translations:publish command to the post-update-cmd scripts in your application's composer.json file:

```json
{
    "scripts": {
        "post-update-cmd": [
            "@php artisan translations:publish --ansi"
        ]
    }
}
```

Official Link : 

https://github.com/MohmmedAshraf/laravel-translations