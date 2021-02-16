composer -V
-2.0.6 
-2.0.8 = original

npm -v
-6.14.9
-6.14.10 = original

php -v
-7.4.3
-7.2.19 = original




composer create-project --preder-dist laravel/laravel chatapp
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
composer require laravel/jetstream - error 

still not fix 
1. composer remove laravel/jetstream
2. php artisan route:cache
3. composer require laravel/jetstream


How to install Laravel 8 with Jetstream Authentication scaffolding - Login and Register


remove laravel installer
-composer global remove laravel/installer
update with the latest version of the laravel 
-composer global require laravel/installer

laravel new blog --jet
-livewire
-no /*not for teams*/





