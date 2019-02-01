<?php

function loadTemplate($fileName, $templateVars)
{
    extract($templateVars);
    ob_start();
    require $fileName;
    $contents = ob_get_clean();
    return $contents;
}

function findjoke($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM joke WHERE id = :id');
    $values = [
        'id' => $id
  ];

    $stmt -> execute($values);

    return $stmt -> fetch();
}
