<?php

declare(strict_types=1);

$pdo = null;

try {

        $pdo = new PDO('mysql:host=localhost;dbname=teste', 'julio', '4567');
} catch (Exception $e) {
        echo $e->getMessage();
        die();
}

return $pdo;
