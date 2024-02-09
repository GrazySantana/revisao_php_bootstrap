<?php

// Conexão (MySQL)

// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "cadastro";

// try{

//     $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);


// }  catch(PDOException $err){

// }

// Conexão (Postgre)

$host = "localhost";
$user = "postgres";
$pass = "123";
$dbname = "cadastro";
$port = 5432; // Porta padrão do PostgreSQL

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass");

    // Configurar o PDO para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $err) {
    //echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado " . $err->getMessage();
}
