# epam-mentoring-back

## Requirements
- PHP 7.1
- composer (https://getcomposer.org)

## Installation
- composer install
- php bin/console doctrine:database:create --if-not-exists
- php bin-console doctrine:schema:update --force
- php bin/console doctrine:fixtures:load -q

## Configuration
All configs are defined in .env file
DB connection string:

DATABASE_URL=mysql://symfony:symfony@127.0.0.1:3306/symfony

DATABASE_URL={DRIVER}://{DB_NAME}:{DB_USER}@{DB_HOST}:{DB_PORT}/{DB_USER_PWD}


## Default data

