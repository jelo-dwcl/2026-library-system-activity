<?php

declare(strict_types=1);

namespace App\Library\Service;

use DateTime;
use App\Library\Config\LibraryConfig;

class LibraryService{
    public function calculateDueDate($days){
        $date = new DateTime();
        $date->modify("+{$days} days");

        return $date->format('Y-m-d');
    }

    public function calculateFine($due){
        $today = new DateTime();
        $due = new DateTime($due);

        $diff = $today->diff($due)->format('%r%a');

        return ($diff>0) $diff*$this->fine_rate;

    }
}


?>