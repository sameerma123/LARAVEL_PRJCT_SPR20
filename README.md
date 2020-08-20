
How to run the project in web browser

command - \$php artisan serve

-----------------------------------------------------------------------------------------------------------------------------------------

Deploying on localhost

Download xampp software which provides access to Apache server, Mysql, PHP on the same platform. Using this setup we can deploy our project locally.

-----------------------------------------------------------------------------------------------------------------------------------------

How to download and setup laravel.

To install Laravel we have used Composer which is a dependency manager.

Laravel needs composer to create its folder structure.
1. go to xampp directory
2. go to htdocs folder
3. create new folder with the name Laravel
4. inside this folder we have to place all the rquired files for the project

command to install Laravel via composer: composer create-project laravel/laravel Laravel

Laravel includes the artisan CLI(command line interface). Using this cli we can
create models, controllers and also create database migration files and run migrations.

commands used to create:

1. model - \$php artisan make:model modelName -m
2. controller - \$php artisan make:controller controllerName
3. migrate the tables created to db - \$php artisan migrate


Laravel follows the Model View Controller architecture.
This project has a total of 7 models, 16 views, 8 controllers.

-----------------------------------------------------------------------------------------------------------------------------------------

how to create authentication files

Authentication files are created using the

commands used to setup the auth files.
1. composer require laravel/ui
2. php artisan ui:auth

-----------------------------------------------------------------------------------------------------------------------------------------

