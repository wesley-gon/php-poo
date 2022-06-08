<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO - Exemplo 2</title>
</head>
<body>
    <h1>PHH POO - Exemplo 3</h1>
    <hr>

    <h2> Assuntos Abordados: </h2>
    <ul>
        <li>Acesso direto a propriedades</li>
        <li>Atributos de Dados e leituras</li>
    </ul>

<?php 
//Importando a Classe
require_once "src/Cliente.php";

//Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados às propriedades do objeto
$clienteA->nome = "Wesley";
$clienteA->email = "wesley@gmail.com";
$clienteA->telefones = ["11-2121-2828", "11-1212-1818"];

$clienteB->nome = "Bernardo";
$clienteB->email = "bernardo@gmail.com";
$clienteB->telefones = array("11-2929-4747");

?>

<h2>Dados dos objetos (leitura)</h2>
<h3> <?= $clienteA->nome ?> </h3>
<p> E-mail: <?= $clienteA->email ?> </p>
<p> Telefones: <?=implode(" / ",$clienteA->telefones) ?> </p>

<h3> <?= $clienteB->nome ?> </h3>
<p> E-mail: <?= $clienteB->email ?> </p>
<p> Telefones: <?=implode(" / ",$clienteB->telefones) ?> </p>
<p> Senha: <?= $clienteB->senha ?> </p>


<h2>Chamando o método exibirDados</h2>
<?= $clienteA->exibirDados()?>
<?= $clienteB->exibirDados()?>

<!-- <pre> <?=var_dump($clienteA, $clienteB)?></pre> -->
</body>
</html>