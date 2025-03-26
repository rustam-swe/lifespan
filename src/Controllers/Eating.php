<?php
declare(strict_types=1);

namespace App\Controllers;

use DateTime;

class Eating {
    public function eatingCalculate($interval) {
        $eating = new \Core\Calculation();
        $anualSpend = 365;
        $hoursByPeriods = [
            '0-3'  => 1.5,
            '3-12' => 2,
            '12-25' => 2.5,
            '25-75' => 2
        ];
        $result = $eating->calculateHours($interval, $hoursByPeriods, $anualSpend);

        // Если возраст слишком мал, возвращаем минимальные значения
        if ($interval->y < 1) {
            return [
                'Done' => 0,
                'Left' => $result['avgTotal'],
                'avgTotal' => $result['avgTotal'],
            ];
        }

        return $result;
    }
}