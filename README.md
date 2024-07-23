
## Getting Started

- git clone repository
- composer install
- copy env file like this: cp .env.example .env
- change the database details in env file with:
  
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=healthcare

DB_USERNAME=root

DB_PASSWORD=

## Create Database
- mysql -u root
- CREATE DATABASE healthcare;
- exit mysql

- php artisan migrate
- php artisan db:seed

##Tailwind CSS
  
- npm install -D tailwindcss postcss autoprefixer
- npx tailwindcss init -p

## Run project

- php artisan serve
- npm run dev

User login can be found in seeders.
