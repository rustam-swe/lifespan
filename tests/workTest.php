<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Controllers\Work;

class WorkTest extends TestCase
{
    public function testWorkstat(): void
    {
 
        $work = new Work();
        $mockInterval = (object)[
            'y' => 30, // Age 30
            'm' => 6,  // 6 months
            'd' => 15  // 15 days
        ];

        $result = $work->workstat($mockInterval);

        if (!is_array($result)) {
            throw new \Exception("Result is not an array.");
        }

        $requiredKeys = ['Done', 'Left', 'avgTotal'];
        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $result)) {
                throw new \Exception("Key '{$key}' is missing from the result array.");
            }
        }

        if ($result['Done'] < 0) {
            throw new \Exception("Value for 'Done' is less than 0.");
        }
        if ($result['Left'] < 0) {
            throw new \Exception("Value for 'Left' is less than 0.");
        }
        if ($result['avgTotal'] < 0) {
            throw new \Exception("Value for 'avgTotal' is less than 0.");
        }
        echo "All checks passed successfully.";
    }
}
