<?php
declare(strict_types=1);

namespace Router;

class Router {
    public function route(string $path, array $params = []): void {
        switch ($path) {
            case '/form':
                $this->handleForm();
                break;
            case '/results':
                $this->handleResults($params);
                break;
            default:
                $this->handleNotFound();
                break;
        }
    }

    private function handleForm(): void {
        require 'views/form.php';
    }

    private function handleResults(array $params): void {
        $familyTime = $params['familyTime'] ?? null;
        $workData = $params['workData'] ?? null;
        $sleepData = $params['sleepData'] ?? null;
        $roadData = $params['roadData'] ?? null;
        $studyData = $params['studyData'] ?? null;
        $birthday = $params['birthday'] ?? null;
        $person = $params['person'] ?? null;
        require 'views/results.php';
    }

    private function handleNotFound(): void {
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}