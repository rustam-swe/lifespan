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
        // var_dump($birthday);
        $sleepObj = new Sleep();
        $sleep=$sleepObj->agecalculator($birthday);
        echo "<p>How many years did you sleep: " . $sleep . "</p>";
        // var_dump($year_sleep);
        // echo "<p>How many years did you sleep: " . $sleep['years'] . "</p>";
        ?>
    </form>
</body>
</html>
