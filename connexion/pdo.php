<?php
// Récupérer les informations de connexion à la base de données sur Railways
$url = getenv('DATABASE_URL');
$dbUrl = parse_url($url);

// Définir les informations de connexion PDO à la base de données MySQL sur Railways
$host = $dbUrl['host'];
$port = $dbUrl['port'];
$dbname = ltrim($dbUrl['path'], '/');
$username = $dbUrl['user'];
$password = $dbUrl['pass'];

// Initialiser une connexion PDO à la base de données MySQL sur Railways
try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $username, $password);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}
