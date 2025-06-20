<?php
try {
    $pdo = new PDO("mysql:host=mysql;dbname=app;charset=utf8", "user", "password", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
