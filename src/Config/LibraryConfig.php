<?php

declare(strict_types=1);

namespace App\Config;

/**
 * Application Constant
 * 
 * @author Jelo Flores
 * @since 2026-05-05
 */
class LibraryConfig{
    public const DEFAULT_BORROW_DAYS = 14;
    public const DAILY_FINE_RATE = 5.0;
    public const MAX_BORROW_LIMIT = 3;
    public const STATUS_BORROWED = 'borrowed';
    public const STATUS_RETURNED = 'returned';

}
?>