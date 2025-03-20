<?php
declare(strict_types=1);

use Controllers\Family;

$age = $_SESSION['age'] ?? "No age selected";

$family = new Family();
$familyTime = $family->calculateFamilyTime($birthday);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Time</title>
</head>
<body>
    <hr>
    <h2>Family Time</h2>
    <label for="totalDays">Total days lived:</label>
    <input type="text" id="totalDays" name="totalDays" value="<?php echo ' '.$familyTime['total_days'].' days'; ?>" readonly>
    <br><label for="familyDays">You spent:</label>
    <input type="text" id="familyDays" name="familyDays" value="<?php echo ' '.$familyTime['family_days'].' days'; ?>" readonly>
    <br><label for="familyHours">In family time:</label>
    <input type="text" id="familyHours" name="familyHours" value="<?php echo ' '.$familyTime['family_hours'].' hours'; ?>" readonly>
</body>
</html>