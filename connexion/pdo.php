<?php
$user = 'root';
$host= 'containers-us-west-176.railway.app';
$pass = 'F3mLC82nuGnLUvkXTkEl';
$db = 'railway';
$dsn = "mysql://root:F3mLC82nuGnLUvkXTkEl@containers-us-west-176.railway.app:5657/railway";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}