<?php
    declare(strict_types=1);

    $work = new \App\Controllers\Work();
    $person = new \App\Person($_SESSION['birthday']);
    $interval = $person->period;
    $result=$work->workstat($interval);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Work_Page</title>
</head>
<body>
<hr>
<h2>Work</h2>
    <label for="avgTotal">Average total work hours :</label>
    <input type="text" id="avgTotal" name="avgTotal" value="<?php echo ' '.$result["avgTotal"].' hours'; ?>" readonly>
    <br><label for="Done">You worked :</label>
    <input style="margin-left: 111px;" type="text" id="Done" name="Done" value="<?php echo ' '.$result["Done"].' hours'; ?>" readonly>
    <br><label for="leftWork">You can work another :</label>
    <input style="margin-left: 28.5px;" type="text" id="Left" name="Left" value="<?php echo ' '.$result["Left"].' hours'; ?>" readonly>
</body>
</html>
