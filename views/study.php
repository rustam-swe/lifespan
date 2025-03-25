<?php
    declare(strict_types=1);

    use App\Controllers\Study;
    
    $age = $_SESSION['age']??"No age selected";
    var_dump($age);
    $birthDate = DateTime::createFromFormat('d.m.Y',$birthday);
    $now = new DateTime();
    


    if ($birthDate) {
       $diff = $birthDate->diff($now);
       $hoursLived = ($diff->y * 365 + $diff->m * 30 + $diff->d) * 24 + $diff->h;
    } else {
        $hoursLived = 0;
    }
    $studyDays = 5 * 37;//**** */
    $hoursByPeriods = [
        '52560-87600'  => 4,
        '96360-122640' => 6,  
        '131400-149160'=> 7,  
        '157920-210240'=> 4   
    ];
    

    $result = (new Study())->calculateHours($hoursLived, $hoursByPeriods, $studyDays);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study_Page</title>
</head>
<body>
<hr>
<h2>Study</h2>
    <label for="avgTotal" style="width: 200px; display:inline-block;">Average total study hours :</label>
    <input type="text" id="avgStudy" name="avgStudy" value="<?php echo ' '.$result["avgTotal"].' hours'; ?>" readonly>
    <br><label for="studyHours" style="width: 200px; display:inline-block;">You studied :</label>
    <input type="text" id="studyHours" name="studyHours" value="<?php echo ' '.$result["study"].' hours'; ?>" readonly>
    <br><label for="leftStudy" style="width: 200px; display:inline-block;">You can study another :</label>
    <input type="text" id="leftStudy" name="leftStudy" value="<?php echo ' '.$result["leftStudy"].' hours'; ?>" readonly>
</body>
</html>
