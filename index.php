<?php
declare(strict_types=1);

session_start(); 

require 'vendor/autoload.php';


define('AVERAGE_LIFE_DURATION', 75);
$currentDate = date('Y-m-d');

$birthday = $_POST["dob"] ?? null;


$age = 20; 

$_SESSION['age'] = $age;

require 'src/Controllers/Family.php'; 
require 'views/family.php';           
require 'views/form.php';             

if($age >= 18) {
    require 'views/work.php';
}
