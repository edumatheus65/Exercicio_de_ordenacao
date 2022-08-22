<?php

    // Usando PDO

    $host = "localhost";
    $dbname = "agenda";
    $user = "eduardo";
    $pass = "";


    

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    } catch (PDOException $e) {
        // Erro de conexão
        $error = $e->getMessage();
        echo "Error: $error";
    }

    // Ativar o modos de erros





?>