<?php
include 'includes/DatabaseConnection.php';

if (isset($_POST['joketext'])) {
    try {
        $sql = 'INSERT INTO joke (joketext, jokedate)
                VALUES (:joketext, CURDATE())';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->execute();

        header('Location: jokes.php');
        exit();
    } catch (PDOException $e) {
        $title = 'Database Error';
        $output = 'Error adding joke: ' . $e->getMessage();
    }
} else {
    $title = 'Add a New Joke';
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';
?>
