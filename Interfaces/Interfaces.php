<?php
declare(strict_types=1);

namespace Interfaces;

interface Interfaces {
    public function calculateHours(\DateInterval $interval, array $hoursByPeriods, int $annualSpent): array;
}
