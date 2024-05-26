<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    echo "Nome: $nome <br> Sobrenome: $sobrenome <br> Email: $email <br> Idade: $idade";
}
