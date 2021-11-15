# Tiny e-commerce

This small project aims to provide an approach to provide an API service (backend) to provide data for a Frontend tiny e-commerce.

## Requirements

Docker & Docker Compose

## Setup

Clone the project repository in you local environment. Inside the repo main folder `tiny-ecommerce` run:

```bash
docker-compose build
docker-compose up -d
```
In order to get the email working, you should set the SMTP config in `.env` file.

In case you need to acces the app container called `teapp-app` run:

```bash
./docker-bash.sh
composer install
php artisan migrate
npm install
npm run watch
```


