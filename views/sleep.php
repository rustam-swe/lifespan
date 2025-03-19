<?php
use \App\Controllers\Sleep;
// (new \App\Controllers\Sleep())->calculate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sleep calculator</h1>
    <form action="" method="POST">
        <label for="birthday">Enter your year, month, and day of birth</label><br><br>
        <input type="date" name="birthday"><br><br>
        <button type="submit">Submit</button>
        <?php
        $birthday = $_POST["birthday"];
        $year  = date("Y", strtotime($birthday)); // Yil  
        $month = date("m", strtotime($birthday)); // Oy  
        $day   = date("d", strtotime($birthday)); // Kun  
        $sleepObj = new Sleep();
        $sleep=$sleepObj->agecalculator($day,$month,$year);<br><br>
        echo "Born $day/$month/$year, slept ~ {$sleep['hours']} hours or {$sleep['years']} years.\n";
        echo "Remaining sleep ~ {$sleep['remainingHours']} hours or {$sleep['remainingYears']} years.\n"
        ?>
    </form>
</body>
</html>
