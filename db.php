<?php

use function PHPSTORM_META\type;

$dsn = 'mysql:host=localhost;dbname=empresa';
    $username = 'root';
    $password = '';
    $options = [];
    
    try {
        $conexao = new PDO($dsn, $username, $password, $options);
        
    } catch (PDOException $erro) {
       
    }