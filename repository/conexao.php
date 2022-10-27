<?php

    // Desenvolvimento
    $conexoes['host']  = 'localhost';
    $conexoes['login'] = 'root';
    $conexoes['senha'] = 'root';
    $conexoes['datab'] = 'fiap_mentalid';

    $conexao = new mysqli($conexoes['host'], $conexoes['login'], $conexoes['senha'], $conexoes['datab']);

    if($conexao->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }