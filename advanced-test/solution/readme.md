# Befeni Technical Test [Advanced] - Solution by Jaganathan Nanthakumar

## Source Overview

[Laravel framework](https://laravel.com/) was used to complete **Requirement 1** and **Requirement 2**. An automated feature test is also written to ensure the requirements are met. 

To setup and run the project you need below softwares and tools installed:

- PHP with Composer
- MySQL
- Redis

After installing above requirements, navigate to this directory and run below command

>composer install

It will take a while to download all dependencies. Once its complete, make a copy of **.env.example** file and rename it to **.env**. After doing this, please ensure to update the below values as per your setup.

**DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379**

Then run the below commands,

> php artisan key:generate
> php artisan migrate
> php artisan test

If everything went fine, you should see the test case passing as shown below:

<img src="https://jaganathan.online/develop/assignments/bifeni/advanced-test-feature-test-passing.png" >

You can also check your data sources directly to ensure they are in sync.

<img src="https://jaganathan.online/develop/assignments/bifeni/advanced-test-data-sources-output.png" width="1300" height="300">

## Explanation.

