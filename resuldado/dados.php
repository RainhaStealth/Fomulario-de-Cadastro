<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["name"];
    $email = $_POST["email"];

    if(empty($nome) || empty($email)){
        echo "Preencha todos os campos.";
    } else {
        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
    }
}

?>