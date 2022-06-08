<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Exemplo 3</title>
</head>
<body>
    <h1>PHH POO - Exemplo 3</h1>
    <hr>

    <h2> Assuntos Abordados: </h2>
    <ul>
        <li>Encapsulamento</li>
        <li></li>
    </ul>

<?php 
//Importando a Classe
require_once "src/Cliente.php";

//Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados às propriedades do objeto
$clienteA->setNome("Wesley");
$clienteA->setEmail("wesley@gmail.com");
$clienteA->setSenha("123456789");

$clienteB->setNome("Bernardo");
$clienteB->setEmail("Bernanrdo@gmail.com");
$clienteB->setSenha("123456789");


?>

<h2>Dados dos objetos (leitura via getters)</h2>
<h3> <?= $clienteA->getNome() ?> </h3>
<p> E-mail: <?= $clienteA->getEmail() ?> </p>
<p> Senha: <?= $clienteA->getSenha() ?> </p>

<h3> <?= $clienteB->getNome() ?> </h3>
<p> E-mail: <?= $clienteB->getEmail() ?> </p>
<p> Senha: <?= $clienteB->getSenha() ?> </p>


<!-- <pre> <?=var_dump($clienteA, $clienteB)?></pre> -->
</body>
</html>