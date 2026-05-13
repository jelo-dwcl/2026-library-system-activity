<?php

declare(strict_types=1);

namespace App\Service;

/**
 * Contains business logic
 * 
 * @author Jelo Flores
 * @since 2026-05-06
 */
use DateTime;
use App\Config\LibraryConfig;

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

        if ($diff>0) {
            return abs($diff) * $this->fine_rate;
        return 0;
        }

    }
}


?>