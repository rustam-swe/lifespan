<?php
    declare(strict_types=1);

    namespace Controllers;

    class Work implements \Interfaces\WorkInterface {
        
        public function __construct()
        {
            echo 'Work Controller';
        }
    }
?>
