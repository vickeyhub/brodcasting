# Custom Laravel brodcasting by laravel WebSocket
## _Vishal Maurya_


This is laravel based Brodcasting Assignment date - 02 jan, 2024

## Tech Stacks

This project uses a number of open source projects to work properly:

- [Laravel.com] - Fast and best web framwework for every kind of Develoepr.
- [https://beyondco.de/docs/laravel-websockets/getting-started/introduction] - Laravel WebSockets is a package for Laravel 5.7 and up that will get your application started with WebSockets in no-time! It has a drop-in Pusher API replacement, has a debug dashboard.

- [Twitter Bootstrap] - great UI Experiance for modern web apps
- [php.net] - backend power ofv laravel
- [Vite] - the streaming build system
- [jQuery] - duh


## Installation

laravel Brodcasting requires [Laravel](https://laravel.com/) v10+ with PHP v8.1+ to run.

Install the dependencies and devDependencies and start the server.

```sh
git clone https://github.com/vickeyhub/brodcasting.git
```
Create "brodcast" database in MySQL
Create .env file and copy all containts from .env.example
```
cd brodcasting
```

```
php artisan migrate
php artisan db:seed
```

```
composer install / composer update (if Required)
```
Install Node modules Depedency
```
npm install
```
just run once and you got the build
```
npm run build
```

## Run the Project

Want to run the Project - let's Go


Open your favorite Terminal and run these commands.

First Tab:

```sh
php artisan serve
```

Second Tab:

```sh
php artisan websockets:serve
```

(optional) Third:

```sh
npm run build (If its not build and not stored js/css files in public/build/files)
```

```sh
http://127.0.0.1:8000
```
open in another browser tab
```sh
http://127.0.0.1:8000/laravel-websockets
```
once you open these links, click on login and put these credentials
username - `admin@gmail.com`
password - `pass@123`
## Thank You 
