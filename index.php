<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Time Calculator</title>
</head>
<body>

    <h2>Family Time Calculator</h2>
    <form method="POST">
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function calculateFamilyTime($birthdate) {
        $now = new DateTime();
        $birth = new DateTime($birthdate);

        if ($birth > $now) {
            return "Error: Birthdate cannot be in the future!";
        }

        $age = $birth->diff($now)->y;
        $totalDaysLived = $birth->diff($now)->days;
        $familyDays = 0;

        for ($i = 0; $i < $age; $i++) {
            if ($i < 4) {
                $familyDays += 0.9 * 365;
            } elseif ($i < 7) {
                $familyDays += 0.6 * 365;
            } elseif ($i < 18) {
                $familyDays += 0.4 * 365;
            } elseif ($i < 23) {
                $familyDays += 0.25 * 365;
            } elseif ($i < 65) {
                $familyDays += 0.3 * 365;
            } else {
                $familyDays += 0.5 * 365;
            }
        }

        $daysThisYear = $totalDaysLived - ($age * 365);
        if ($daysThisYear > 0) {
            if ($age < 4) {
                $familyDays += 0.9 * $daysThisYear;
            } elseif ($age < 7) {
                $familyDays += 0.6 * $daysThisYear;
            } elseif ($age < 18) {
                $familyDays += 0.4 * $daysThisYear;
            } elseif ($age < 23) {
                $familyDays += 0.25 * $daysThisYear;
            } elseif ($age < 65) {
                $familyDays += 0.3 * $daysThisYear;
            } else {
                $familyDays += 0.5 * $daysThisYear;
            }
        }

        $familyPercentage = ($totalDaysLived > 0) ? round(($familyDays / $totalDaysLived) * 100, 2) : 0;

        return [
            'total_days' => $totalDaysLived,
            'family_days' => round($familyDays),
            'family_percentage' => $familyPercentage
        ];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["birthdate"])) {
        $birthdate = $_POST["birthdate"];
        $result = calculateFamilyTime($birthdate);

        if (is_string($result)) {
            echo "<h3>Error:</h3>";
            echo "<p>$result</p>";
        } else {
            echo "<h3>Result:</h3>";
            echo "<p>You have lived <strong>{$result['total_days']}</strong> days.</p>";
            echo "<p>Approximately <strong>{$result['family_days']}</strong> of those days were spent with family ({$result['family_percentage']}%).</p>";
        }
    }
    ?>

</body>
</html>