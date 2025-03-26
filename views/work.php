<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Your life stats</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-primary">Work</h2>
        <div class="mb-3">
            <label for="avgTotal" class="form-label">Average total work hours:</label>
            <input type="text" id="avgTotal" name="avgTotal" class="form-control" value="<?php echo ' '.$result["avgTotalHours"].' hours,  '.
                $result["avgTotalDays"] . ($result["avgTotalDays"] > 1 ? ' days,  ' : ' day,  ') .
                $result["avgTotalYears"] . ($result["avgTotalYears"] > 1 ? ' years' : ' year');?>" readonly>
        </div> 
        <div class="mb-3">
            <label for="Done" class="form-label">You worked:</label>
            <input type="text" id="Done" name="Done" class="form-control" value="<?php echo ' '.$result["DoneHours"].' hours,  '.
                $result["DoneDays"] . ($result["DoneDays"] > 1 ? ' days,  ' : ' day,  ').
                $result["DoneYears"] . ($result["DoneYears"] > 1 ? ' years' : ' year'); ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="leftWork" class="form-label">You can work another:</label>
            <input type="text" id="Left" name="Left" class="form-control" value="<?php echo ($result["LeftHours"]<=0) ? 'Thanks for your service 🫡' : 
                ($result['LeftHours'].' hours,  '.
                $result["LeftDays"] . ($result["LeftDays"] > 1 ? ' days,  ' : ' day,  ').
                $result["LeftYears"]. ($result["LeftYears"] > 1 ? ' years' : ' year')) ?>" readonly>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

