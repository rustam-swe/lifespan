<?php
declare(strict_types=1);

require 'vendor/autoload.php';

// date_default_timezone_set("Asia/Tashkent");

define('AVERAGE_LIFE_DURATION', 75);
$currentDate = date('Y-m-d');
$age = 23; // FIXME: Calculate the actual age 
var_dump($currentDate);

require 'views/form.php';

$birthday = $_POST["dob"];

require 'views/sleep.php';

if($age>7){
  require 'views/study.php';
  require 'views/road.php';
}

if($age>22){
  require 'views/work.php';
}
