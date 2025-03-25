<?php
// Router.php
?>

<hr>
<h2>Work Time</h2>
<?php if (!$person || !isset($person->age) || $person->age < 18): ?>
    <p class="error-message">You must be at least 18 years old to see work statistics.</p>
<?php else: ?>
    <div class="mb-3">
        <label for="avgTotal">Average total work hours:</label>
        <input type="text" id="avgTotal" name="avgTotal" class="form-control" value="<?php echo ' ' . $workData['avgTotal'] . ' hours'; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="workHours">You worked:</label>
        <input type="text" id="workHours" name="workHours" class="form-control" value="<?php echo ' ' . $workData['Done'] . ' hours'; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="leftWork">You can work another:</label>
        <input type="text" id="leftWork" name="leftWork" class="form-control" value="<?php echo ' ' . $workData['Left'] . ' hours'; ?>" readonly>
    </div>
<?php endif; ?>