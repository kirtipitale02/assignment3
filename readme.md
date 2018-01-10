************* Assignment Two *************




************* following commands need to be executed **********

1. php artisan migrate (running all outstanding migration ) OR php artisan migrate --path=/app/database/migrations/create_countries_table (running all outstanding migration for a path)

2.php artisan db:seed --class=CountryTableSeeder


************* Process *************



1. composer create-project laravel/laravel project-name

2. create database in phpmyadmin(countrysearch)

3.php artisan serve

4. For Migration : php artisan make:migration create_countries_table

5. For Seeder : php artisan make:seeder CountryTableSeeder

6. Migration are files which contain a class defination with both an up() and down() method.The up() method is run when the migration is executed to apply,changes to the database. The down() method is run to revert the changes.


************ Commands are used to run the project ***********


1. php artisan migrate (running all outstanding migration ) OR php artisan migrate --path=/app/database/migrations/create_countries_table (running all outstanding migration for a path)

2.php artisan db:seed --class=CountryTableSeeder

FOR CREATING ROUTE (web.php) :
Route::get('/','CountryController@CountriesList');

FOR CREATING CONTROLLER (CountryController.php) :
php artisan make:controller CountryController

FOR CREATING VIEW (countries-list.blade.php)


************** Once the setup of the project has been done *******************



1. php artisan serve

2. put http://localhost:8000/ url in your browser you will get list of coutries with their respective ISO2 and ISO3 codes.

3. You can also filter the data on select country name. so that you will get result of selected country code



*********************** Internal process for assignment two *****************

 
1. Route :

	i.Location --LARAVEL_ROOT/routes/web.php
	
	ii.usage --
	Route::get('/', 'CountryController@CountriesList');


2. Controller :

LARAVEL_ROOT/app/Http/Controllers/CountryController

controller perform logical part. CountryController function checks the ISO exists or not in database. If not then it returns all the data from database else returns result of selected (filter data)ISO code.

3. View  :
 
 LARAVEL_ROOT/resources/views/countries-list.blade.php

 Blade is most powerful templating engine provided with laravel. blade adds essentially zero overhead to your application .Blade view files use .blade.php file extension and are stored in resources/views.

 This view display list of available country with ISO code (ISO2 and ISO3).
