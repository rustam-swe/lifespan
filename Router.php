<?php
declare(strict_types=1);

namespace Router;

class Router {
    public function route(string $path, array $params = []): void {
        extract($params);

        switch ($path) {
            case '/form':
                require 'views/form.php';
                break;
            case '/results':
                require 'views/results.php';
                break;
            default:
                require 'views/form.php';
                break;
        }
    }
}