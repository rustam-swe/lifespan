<?php
declare(strict_types=1);

session_start(); 

require 'vendor/autoload.php';

define('AVERAGE_LIFE_DURATION', 75);
$currentDate = date('Y-m-d');

require 'views/form.php';

if (isset($_POST["dob"])){
  return;
}

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
