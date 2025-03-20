<?php
    declare(strict_types=1);

    use App\Controllers\Work;

    $age = $_SESSION['age']??"No age selected";

    $hoursByPeriods = [
        '18-24' => 4,
        '25-54' => 8,
        '55-64' => 7,
        '65-75' => 5
    ];

    $result = (new Work())->workHours($age, $hoursByPeriods);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work_Page</title>
</head>
<body>
<hr>
<h2>Work</h2>
    <label for="avgTotal">Average total work hours :</label>
    <input type="text" id="avgWork" name="avgWork" value="<?php echo ' '.$result["avgTotal"].' hours'; ?>" readonly>
    <br><label for="workHours">You worked :</label>
    <input type="text" id="workHours" name="workHours" value="<?php echo ' '.$result["worked"].' hours'; ?>" readonly>
    <br><label for="leftWork">You can work another :</label>
    <input type="text" id="leftWork" name="leftWork" value="<?php echo ' '.$result["leftWork"].' hours'; ?>" readonly>
</body>
</html>
