<?php
  declare(strict_types=1);

  session_start(); 

require 'vendor/autoload.php';


require 'views/form.php';   

if (!isset($_POST["dob"])){
  return;
}

$birthday = $_POST["dob"];

$person = new \App\Person($birthday);
$generalInfo =  "Current date:". date('Y-m-d');
$generalInfo .= "<br> Age: $person->age";

echo $generalInfo;

  require 'views/sleep.php';
  require 'views/family.php';

  $_SESSION['age'] = $person->age;

if($person->age > 7) {
   require 'views/study.php';
   require 'views/road.php';
}

if($person->age >= 18){
  require 'views/work.php';
}
