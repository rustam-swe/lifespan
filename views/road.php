<?php
declare(strict_types=1);

use App\Controllers\Road;
use App\Person;

$age = new Person('2005-03-14')->age;
$road = new Road();
$annualSpent = 365;
$hoursByPeriods = [
  '18-24' => 2,
  '25-54' => 2.5,
  '55-64' => 1.5,
  '65-75' => 1
];
$result = $road->travelTime($age, $hoursByPeriods, $annualSpent);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h2>Road</h2>
    <label for="avgTotal">Average total travel hours :</label>
    <input type="text" id="avgTotal" name="avgTotal" value="<?php echo ' '.$result["totalTravelTime"].' hours'; ?>" readonly>
    <br><label for="Done">You traveled :</label>
    <input style="margin-left: 111px;" type="text" id="Done" name="Done" value="<?php echo ' '.$result["avgTravel"].' hours'; ?>" readonly>
    <br><label for="leftWork">You can travel another :</label>
    <input style="margin-left: 28.5px;" type="text" id="Left" name="Left" value="<?php echo ' '.$result["leftTravel"].' hours'; ?>" readonly>
</body>
</html>
