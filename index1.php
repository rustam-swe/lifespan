<?php
declare(strict_types=1);

require 'vendor/autoload.php';

define('BASE_PATH', '/');

// Запускаем сессию для хранения последней даты рождения
session_start();

$router = new \Router\Router();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '' || $path === '/') {
    $path = '/form';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $path === '/form') {
    try {
        $birthday = $_POST['dob'] ?? null;
        if (!$birthday) {
            throw new Exception("Date of birth is required.");
        }

        // Сохраняем дату рождения в сессии
        $_SESSION['lastBirthday'] = $birthday;

        $person = new \Core\Person($birthday);

        $stats = new \App\Stats($person);

        $family = new \App\Controllers\Family();
        $familyTime = $family->calculateFamilyTime($birthday);

        $work = new \App\Controllers\Work();
        $workData = $work->workstat($person->period);

        $sleep = new \App\Controllers\Sleep();
        $sleepData = $sleep->sleepstat($person->period);

        $road = new \App\Controllers\Road();
        $roadData = $road->roadStats($person->period);

        $eating = new \App\Controllers\Eating();
        $eatingData = $eating->eatingCalculate($person->period);

        $study = new \App\Controllers\Study();
        $studyData = $study->calculateStudyTime($person->period);

        $params = [
            'familyTime' => $familyTime,
            'workData' => $workData,
            'sleepData' => $sleepData,
            'roadData' => $roadData,
            'eatingData' => $eatingData,
            'studyData' => $studyData,
            'birthday' => $birthday,
            'person' => $person,
        ];

        $router->route('/results', $params);
        exit;
    } catch (Exception $e) {
        $error = "An error occurred: " . $e->getMessage();
        $lastBirthday = $_SESSION['lastBirthday'] ?? null;
        $router->route('/form', ['error' => $error, 'lastBirthday' => $lastBirthday]);
        exit;
    }
} elseif ($path === '/results') {
    header('Location: /form');
    exit;
} else {
    $lastBirthday = $_SESSION['lastBirthday'] ?? null;
    $router->route($path, ['lastBirthday' => $lastBirthday]);
    exit;
}
