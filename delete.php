<?php

    require_once "db.php";
    $id = $_GET['id'];
    $sql = 'DELETE FROM pessoas WHERE id=:id';
    $data = $conexao->prepare($sql);

    if ($data->execute([':id' => $id])) {
        header('location: index.php');
    }