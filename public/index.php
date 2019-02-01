<?php
require '../dbconnect.php';
require '../functions.php';

$title = 'Internet Joke Database';

$joke = findjoke($pdo, $_GET[1]);

$output = loadTemplate('../templates/home.html.php', ['joke' => $joke]);

require  '../templates/layout.html.php';
