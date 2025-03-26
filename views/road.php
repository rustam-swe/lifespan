<?php
?>

<hr>
<h2>Road Time</h2>
<?php if (!$person || !isset($person->age) || $person->age <= 7): ?>
    <p class="error-message">You must be at least 7 years old to see road statistics.</p>
<?php else: ?>
    <div class="mb-3">
        <label for="totalTravelTime">Total travel time:</label>
        <input type="text" id="totalTravelTime" name="totalTravelTime" class="form-control" value="<?php echo isset($roadData['Done']) ? ' ' . $roadData['Done'] . ' hours' : ' N/A'; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="avgTravel">Average travel span:</label>
        <input type="text" id="avgTravel" name="avgTravel" class="form-control" value="<?php echo isset($roadData['avgTotal']) ? ' ' . $roadData['avgTotal'] . ' hours' : ' N/A'; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="leftTravel">Remaining travel time:</label>
        <input type="text" id="leftTravel" name="leftTravel" class="form-control" value="<?php echo isset($roadData['Left']) ? ' ' . $roadData['Left'] . ' hours' : ' N/A'; ?>" readonly>
    </div>
<?php endif; ?>