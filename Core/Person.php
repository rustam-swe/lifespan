<?php
declare(strict_types=1);

namespace Core;

class Person {
    public const AVERAGE_LIFE_DURATION = 75;

    public int $age;
    public \DateInterval $period;

    public function __construct(string $birthdate) {
        $now = new \DateTime();
        $birth = new \DateTime($birthdate);

        if ($birth > $now) {
            throw new \Exception("Birthdate cannot be in the future!");
        }

        $this->period = $birth->diff($now);
        $this->age = $this->period->y;
    }
}