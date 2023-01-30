# Project

#### Install project

```bash
composer install
```

#### Config mysql

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=pass
```
```bash
php artisan migrate:fresh --seed
```

#### Run Server

```bash
php artisan serve
```