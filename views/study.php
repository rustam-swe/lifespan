<?php
?>

<hr>
<h2>Study Time</h2>
<?php if (!$person || !isset($person->age) || $person->age < 7): ?>
    <p class="error-message">You havent started studying yet! (Stats available for ages 7 and up)</p>
<?php else: ?>
    <div class="stat-card">
        <i class="fas fa-book"></i>
        <p>Total study time: <?php echo isset($studyData['studyHours']) ? $studyData['studyHours'] . ' hours' : 'N/A'; ?></p>
    </div>
    <div class="stat-card">
        <i class="fas fa-clock"></i>
        <p>Average study time: <?php echo isset($studyData['avgStudyHours']) ? $studyData['avgStudyHours'] . ' hours' : 'N/A'; ?></p>
    </div>
    <div class="stat-card">
        <i class="fas fa-hourglass-end"></i>
        <p>Remaining study time: <?php echo isset($studyData['remainingStudyHours']) ? $studyData['remainingStudyHours'] . ' hours' : 'N/A'; ?></p>
    </div>
<?php endif; ?>
