<?php
declare(strict_types=1);

require 'vendor/autoload.php';

define('BASE_PATH', '/');

$router = new \Router\Router();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if (BASE_PATH !== '/' && strpos($path, BASE_PATH) === 0) {
//     $path = substr($path, strlen(BASE_PATH));
// }

if ($path === '' || $path === '/') {
    $path = '/form';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $path === '/form') {
    try {
        $birthday = $_POST['dob'] ?? null;
        if (!$birthday) {
            throw new Exception("Date of birth is required.");
        }

        $person = new \Core\Person($birthday);

        $stats = new \App\Stats($person);

        $family = new \App\Controllers\Family();
        $familyTime = $family->calculateFamilyTime($birthday);

        $work = new \App\Controllers\Work();
        $workData = $work->workstat($person->period);

        $sleepData = null;

        $road = new \App\Controllers\Road();
        $hoursByPeriods = [
            '7-18' => 1,
            '19-30' => 2,
            '31-50' => 3,
            '51-75' => 2
        ];
        // $roadData = $road->travelTime($person->age, $hoursByPeriods, 365);

        $studyData = ['studyHours' => 0, 'remainingStudyHours' => 0];

        $params = [
            'familyTime' => $familyTime,
            'workData' => $workData,
            'sleepData' => $sleepData,
            // 'roadData' => $roadData,
            'studyData' => $studyData,
            'birthday' => $birthday,
            'person' => $person,
        ];

        $router->route('/results', $params);
    } catch (Exception $e) {
        $error = "An error occurred: " . $e->getMessage();
        require 'views/form.php';
    }
} else {
    $router->route($path);
}