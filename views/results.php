<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifespan Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/styles.css" rel="stylesheet">
</head>
<body>
    <?php
    $error = null;

    if (!$birthday) {
        $error = "Please enter your date of birth first.";
    }
    ?>

    <div class="result-container">
        <?php if ($error): ?>
            <p class="error-message"><?php echo $error; ?></p>
            <a href="/form" class="back-button">Back to Form</a>
        <?php else: ?>
            <?php if ($familyTime && isset($familyTime['hours'], $familyTime['remainingHours'])): ?>
                <?php require 'family.php'; ?>
            <?php else: ?>
                <p class="error-message">Family data not available or in incorrect format.</p>
                <?php var_dump($familyTime); // Отладка ?>
            <?php endif; ?>

            <?php if ($workData): ?>
                <?php require 'work.php'; ?>
            <?php else: ?>
                <p class="error-message">Work data not available.</p>
            <?php endif; ?>

            <?php if ($sleepData): ?>
                <?php require 'sleep.php'; ?>
            <?php else: ?>
                <!-- <p class="error-message">Sleep data not available (under development).</p> -->
            <?php endif; ?>

            <?php if ($roadData): ?>
                <?php require 'road.php'; ?>
            <?php else: ?>
                <p class="error-message">Road data not available.</p>
            <?php endif; ?>

            <?php if ($studyData): ?>
                <?php require 'study.php'; ?>
            <?php else: ?>
                <p class="error-message">Study data not available.</p>
            <?php endif; ?>

            <a href="/form" class="back-button">Back to Form</a>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>