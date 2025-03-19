<?php
    declare(strict_types=1);

    use Controllers\Work;

    $work = new Work();

    $age = $_SESSION['age']??"No age selected";
    //echo $age;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work_Page</title>
</head>
<body>
    <label for="avgTotal">Average total work hours :</label>
    <input type="text" id="avgWork" name="avgWork" value="<?php echo ' '.$work->workHours($age)["avgTotal"].' hours'; ?>" readonly>
    <br><label for="workHours">You worked :</label>
    <input type="text" id="workHours" name="workHours" value="<?php echo ' '.$work->workHours($age)["worked"].' hours'; ?>" readonly>
    <br><label for="leftWork">You can work another :</label>
    <input type="text" id="leftWork" name="leftWork" value="<?php echo ' '.$work->workHours($age)["leftWork"].' hours'; ?>" readonly>
</body>
</html>