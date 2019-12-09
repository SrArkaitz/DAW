<?php
require 'vendor/autoload.php';
use models\Admin;
use models\RegularUser;
$son5 = 0;
do{
    $faker = Faker\Factory::create();
    $faker2 = Faker\Factory::create();
    $regularUser = new RegularUser($faker->userName, $faker->name, $faker->lastName, $faker->email, $faker->password, "@" . $faker->name, "@Spooky" . $faker->name);
    $admin = new Admin($faker2->userName, $faker2->name, $faker2->lastName, $faker2->email, $faker2->password, rand ( 1 , 3 ));
    $regularUser->showAction();
    $admin->showAction();
    $regularUser->logout();
    $son5++;
    echo $son5;
}while($son5 != 5);
