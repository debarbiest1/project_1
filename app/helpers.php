<?php

declare(strict_types=1);

function formatAmount(float $amount): string {
    if ($amount < 0) {
        return '-' . '$' . number_format(abs($amount), 2);
    }

    return '$' . number_format($amount, 2);
}

function formatDate(string $date): string {
    $date = strtotime($date);
    return date('M j, Y', $date);
}


?>