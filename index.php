<?php
declare(strict_types=1);

session_start(); 

require 'vendor/autoload.php';

// date_default_timezone_set("Asia/Tashkent");

define('AVERAGE_LIFE_DURATION', 75);
$currentDate = date('Y-m-d');
$age = 23; // FIXME: Calculate the actual age 

require 'views/form.php';

if (isset($_POST["dob"])){
  $birthday = $_POST["dob"];

  require 'views/sleep.php';

$age = 20; // FIXME: Calculate the actual age 
$_SESSION['age'] = $age;


if($age > 7) {
  require 'views/study.php';
  require 'views/road.php';
}

if($age >= 18){
  require 'views/work.php';
}
}
