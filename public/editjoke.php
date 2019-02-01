<?php

require '../functions.php';

require '../dbconnect.php';


if (isset($_POST['joketext'])) {
    $stmt = $pdo->prepare('UPDATE joke SET joketext = :joketext WHERE id = :id');
    $stmt->execute(['joketext' => $_POST['joketext'], 'id' => $_POST['id']]);

    header('location: jokes.php');
} else {
    $joke = findjoke($pdo, $_GET['id']);

    $output = loadTemplate('../templates/editjoke.html.php', ['joke' => $joke]);

    $title = 'Edit joke';
}

require  '../templates/layout.html.php';
