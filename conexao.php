<?php


try {
    $conn = new PDO('mysql:host=localhost;dbname=clienteBD', 'root', '');
} catch (PDOException $e) {
    $e->getMessage();
}
