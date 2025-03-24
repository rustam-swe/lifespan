<?php
 
use App\Controllers\Eating;

    $birthday = $_SESSION['years_for_eating']??"No age selected";
    $age = $_SESSION['age'];

    $totalEating = new Eating();
    $totalEatingDays = $totalEating->eatingCalculate($birthday, $age);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eating Calvulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <hr>
   <h1>Eating Time</h1>

   <?php
       echo "<div class='alert alert-success mt-3'> The time you spend eating in your lifetime: <b>" . $totalEatingDays . "</b> day.</div>";
   ?>

</body>
</html>
