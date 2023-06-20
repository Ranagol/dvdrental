# Description

dvdrental is a Laravel app, that I used to learn and practice PostgreSQL. The postgres webpage
(awesome tutorial, awesome explanation) uses an example of a dvd renting company database for
explanation. This database is about movies, customers...

# Reminder for me 
The DB is in postgres. Check if the postgres service is running.
Open Run Window by Winkey + R.
Type services. msc.
Search Postgres service based on version installed.
Click stop, start or restart the service option.

Use DBeaver once the postgres is running.

# Start the app
run 'php artisan serve' in CLI, then go to http://127.0.0.1:8000/dvd-rental.

# Features

## General description 
See /routes/web.php. Here you will find all the description.

## Testing raw DB queries and testing Eloquent
app/Http/Controllers/SqlTestController.php

## Learning about Jobs and Queues
app\Http\Controllers\JobController.php
This topic is done in MySQL database. So, in order for this to work change from postgres db to
mysql in the .env.

## Sending emails
app/Http/Controllers/EmailController.php

## Events and Listeners
When the user clicks the 'EventCreator' button (that is on the http://127.0.0.1:8000/create-event page), that will send a GET request. The router will trigger the EventController.

## Debugbar
... is installed.

## Telescope
... is here: http://127.0.0.1:8000/telescope





