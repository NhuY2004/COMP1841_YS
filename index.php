<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=week4hw;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = 'SELECT joketext, jokedate, image FROM joke';
    $result = $pdo->query($sql);

    $jokes = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      
        $timestamp = strtotime($row['jokedate']);
        $row['formatted_date'] = date('D d M Y', $timestamp);
        $jokes[] = $row;
    }
} catch (PDOException $e) {
    $error = 'Database connection failed: ' . $e->getMessage();
}


include 'templates/jokes.html.php';
?>