<?php

declare(strict_types=1);


function getTransactionFiles(string $path): array {
    $files = [];
    $transactionFiles = scandir($path);

    foreach ($transactionFiles as $file) {
        if (!is_file($path . $file)) {
            continue;
        }
        $files[] = $file;
    }
    
    return $files;
}

function getTransactions(string $fileName): array {
    $transactions = [];

    if (!file_exists($fileName)) {
        echo "Error! This file doesn't exist.";
        return [];
    }

    $file = fopen($fileName, 'r');

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = $transaction;
    }

    fclose($file); 
    return $transactions;
}


?>