# Laravel 7.0+ Frontend preset for Tabler UI

A Laravel front-end scaffolding preset for [Tabler](https://tabler.io) - a free and open-source HTML Dashboard UI Kit built on Bootstrap.

## Usage

1. Fresh install [Laravel](https://laravel.com/docs/7.x/installation) 7.x or above.
2. Install this preset via `composer require danswiser/tabler-preset`. Laravel will automatically discover this package. No need to register the service provider.

### a. For Presets without Authentication

1. Use `php artisan ui tabler` for the basic Tabler UI preset
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### b. For Presets with Authentication

1. Use `php artisan ui tabler --auth` for the basic preset, auth route entry, and Tabler UI auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install && npm run dev`
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

### Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Reset Password](/screenshots/reset-password.png)

![Dashboard](/screenshots/dashboard.png)

![Verify](/screenshots/verify.png)

![Pagination](/screenshots/pagination-links.png)
![Simple Pagination](/screenshots/simple-pagination-links.png)
