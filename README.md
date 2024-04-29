# Product inventory project with crud and user roles and permissions. 
Only logged in users with the right permissions can manage products and/or staff.

## Installation 
Minimum requirments PHP 8.1, MySQL/MariaDB, composer and Node.js.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials
3. Go to the project's root directory using terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate:fresh --seed`
7. Run `npm install`
8. Run `npm run build` to build assets
9. Start local server by executing `php artisan serve`
