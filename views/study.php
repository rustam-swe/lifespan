
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
    <input type="text" id="studyHours" name="studyHours" value="<?php echo ' '.$result["Studied"].' hours'; ?>" readonly>
    <br><label for="leftStudy" style="width: 200px; display:inline-block;">You can study another :</label>
    <input type="text" id="leftStudy" name="leftStudy" value="<?php echo ' '.$result["RemainingStudy"].' hours'; ?>" readonly>
</body>
</html>
