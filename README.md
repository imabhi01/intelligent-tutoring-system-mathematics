## Requirements for installation:

```
Please note before installation: PHP version above 8.0 or latest is required.
Mysql Latest version
This repository is built in PHP, framework used is Laravel.
The live version of this repository is available at: http://172.206.240.51/
```

## Installation


```
git clone repo
cp .env.example .env
#Setup database with your configuration settings for your local database server

php artisan migrate:fresh --seed

php artisan key:generate

```

```
Register a new user and login -> Take a Quiz
