<?php


try {
    $conn = new PDO('mysql:host=localhost;dbname=clienteDB', 'root', '');
} catch (PDOException $e) {
    $e->getMessage();
}