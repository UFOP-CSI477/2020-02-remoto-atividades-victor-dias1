<?php

$name = $_POST['nome'];
$address = $_POST['endereco'];
$id = $_POST['cpf'];
$fone = $_POST['tel'];


echo ("<h1>Olá, $name!</>");
echo ("<h2>Seja bem-vindx!</h2>");
echo ("<p>CPF: $id</p>");
echo ("<p>Contato: $fone</p>");
echo ('<a href="01-prompt.html">Voltar</a>');
