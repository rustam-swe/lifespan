<?php
    declare(strict_types=1);
    use App\Controllers\TestWork;
    use App\Controllers\Work;
    use \App\Person;
    $work = new Work();
    $person = new Person($_SESSION['birthday']);
    $interval=$person->period;
    $annualSpent = 250;             // 5 hours per day for 50 weeks, rest of the days are holidays and etc day-offs
    $hoursByPeriods = [          
        // '18' => 4,       
        // '25' => 8,       
        // '55' => 7,       
        // '65' => 5       

        '18-24' => 4,
        '25-54' => 8,
        '55-64' => 7,
        '65-75' => 5
    ];
    echo "\n\nAgework: ".$interval->y;
    $result=$work->calculateHours($interval, $hoursByPeriods, $annualSpent);
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
