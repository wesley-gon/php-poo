<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Exemplo 2</title>
</head>
<body>
    <h1>PHH POO - Exemplo 2</h1>
    <hr>

    <h2> Assuntos Abordados: </h2>
    <ul>
        <li>Criação dos objetos</li>
        <li>Uso do método Construtor</li>
        <li>Uso do <code> $this </code> para acessar as propriedades </li>
    </ul>

<?php 
//Importando a Classe
require_once "src/Cliente.php";

//Criação dos objetos
$clienteA = new Cliente('Wesley Fernandes', 'wesley-gon@hotmail.com',);
$clienteB = new Cliente('Fernando Sabiliano', 'sabiliano@gmail.com');
?>

<pre> <?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>