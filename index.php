<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Exemplo 1</title>
</head>
<body>
    <h1>PHH POO - Exemplo 1</h1>
    <hr>

    <h2> Assuntos Abordados: </h2>
    <ul>
        <li>Criação de Classes</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação de Objeto</li>
    </ul>

<?php 
//Importando a Classe
require_once "src/Cliente.php";

//Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;
?>

<pre> <?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>