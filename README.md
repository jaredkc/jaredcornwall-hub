# JaredKC Hub

My hub for personal projects. A [Laravel](https://laravel.com/) app for my blog posts and custom API needs.

## Local Setup

The following instructions are applicable if you are running [Herd](https://herd.laravel.com/)

1. Clone this repo
2. Run `composer install`
3. Create `.env` file from `.env.example`, then:
  - Run `php artisan key:generate` to set `APP_KEY`
  - Set `APP_URL` to `http://jaredkc-hub.test`
4. Create the database `jaredkc_hub`
  - `mysql -u root -h 127.0.0.1 -P 3306 -p`
  - `CREATE DATABASE jaredkc_hub;`
5. Run `php artisan migrate --seed`
6. Run `npm install`, then `npm run build`