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

DB_CONNECTION=mysql
<br />
DB_HOST=127.0.0.1
<br />
DB_PORT=3306
<br />
DB_DATABASE=laravel
<br />
DB_USERNAME=root
<br />
DB_PASSWORD=
<br />
REDIS_HOST=127.0.0.1
<br />
REDIS_PASSWORD=null
<br />
REDIS_PORT=6379

Then run the below commands,

> php artisan key:generate
<br />
> php artisan migrate
<br />
> php artisan test

If everything went fine, you should see the test case passing as shown below:

<img src="https://jaganathan.online/develop/assignments/bifeni/advanced-test-feature-test-passing.png" >

You can also check your data sources directly to ensure they are in sync.

<img src="https://jaganathan.online/develop/assignments/bifeni/advanced-test-data-sources-output.png" width="1300" height="300">

## Explanation

The core part of the solution is the class **App\Befeni\Repository\ShirtOrderRepository**. This class allows to plugin any new data source into the system by implementing the repository pattern but not directly. For all operations on data sources, it accepts arguments with data source names and defaults to standard ones if not provided. It maintains an associative array of data sources and the associated objects that allow it to do the user requested operations. These objects are data source specific implementors for  e.g, **App\Befeni\Repository\ShirtOrderRepositoryMysql** and **App\Befeni\Repository\ShirtOrderRepositoryRedis** that implement the interface **App\Befeni\Repository\ShirtOrderRepositoryInterface**. 

There is also an automated feature test class **Tests\Feature\ShirtOrderRepositoryTest** that ensures the requirements are met by performing the following sequence of operations.

- Create a shirt order with random field values
- Create an instance of class under feature test **App\Befeni\Repository\ShirtOrderRepository**
- Use it to save the shirt order to default data source (MySQL)
- Override the data source in save method to save the same shirt order to Redis
- Retrieve the saved shirt order from default search data source Redis and also ensure assertions on all field values are successful

##### For more information please write to jaganathan.nanthakumar@outlook.com
