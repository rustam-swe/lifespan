<?php
// Router.php
?>

<hr>
<h2>Family Time</h2>
<div class="mb-3">
    <label for="familyHours">Time spent with family:</label>
    <input type="text" id="familyHours" name="familyHours" class="form-control" value="<?php echo ' ' . $familyTime['hours'] . ' hours'; ?>" readonly>
</div>
<div class="mb-3">
    <label for="remainingFamilyHours">Remaining family time:</label>
    <input type="text" id="remainingFamilyHours" name="remainingFamilyHours" class="form-control" value="<?php echo ' ' . $familyTime['remainingHours'] . ' hours'; ?>" readonly>
</div>