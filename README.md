Realtime-Chat-with-Laravel-Vue

This repository contains an pusher project built with Laravel. Follow the instructions below to set up and run the project:



Clone the repository:


```php
git clone git@github.com:abdurrahmanekecik/Realtime-Chat-with-Laravel-Vue.git
cd Realtime-Chat-with-Laravel-Vue
Rename the .env.example file to .env.
```
Update the .env file with your database and Iyzico payment gateway information.

Generate an application key:

```php
php artisan key:generate
```

Run the database migrations:

```php
php artisan migrate
```

Seed the database with sample data:

```php
php artisan db:seed
```
Npm Installations:

```php
npm install
npm run build
```

Start the Laravel development server:

```php
php artisan serve
```
Access the site:

Open an account in Pusher; then enter your account information in the relevant fields in .env.


If you are working locally, open your web browser and go to http://127.0.0.1:8000/.
If you are working from the site link you set up or in the local network, use the appropriate URL.
To access the admin panel, use the following credentials:


To view the list of uploaded products, visit http://127.0.0.1:8000/chat/.



