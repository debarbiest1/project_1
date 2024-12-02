<?php
declare(strict_types=1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'App.php';  
require APP_PATH . 'helpers.php';

$files = getTransactionFiles(FILES_PATH);

if (empty($files)) {
    echo "No transaction files found.";
    exit;
}

$transactions = getTransactions(FILES_PATH . $files[0]);
unset($transactions[0]); 
print_r($transactions);

require VIEWS_PATH . 'transactions.php';

?>
