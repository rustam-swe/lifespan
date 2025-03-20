<?php
declare(strict_types=1);

session_start(); 

require 'vendor/autoload.php';

// date_default_timezone_set("Asia/Tashkent");

define('AVERAGE_LIFE_DURATION', 75);
$currentDate = date('Y-m-d');


require 'views/form.php';

$birthday = $_POST["dob"];

$age = 20; // FIXME: Calculate the actual age 

$_SESSION['age'] = $age;

// require 'views/sleep.php';

// if($age > 7) {
//   require 'views/study.php';
//   require 'views/road.php';
// }

if($age >= 18){
  require 'views/work.php';
}
