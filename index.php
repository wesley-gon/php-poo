<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe abstrata (não pode ser instanciada</li>
    </ul>
<?php
// Importando a classe
//**require_once "src/Cliente.php";** // superclasse - não precisamos chama-lá aqui, pois esta sendo chamada dentro das funções em que é usada, no caso PessoaFiscia e Pessoa Juridica
require_once "src/PessoaFisica.php"; // subclasse
require_once "src/PessoaJuridica.php"; // subclasse


$clientePF = new PessoaFisica;
$clientePF->setNome('Wesley');
$clientePF->setEmail('Wesley@gmail.com');
$clientePF->setSenha('123abc');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(35);


$clientePJ = new PessoaJuridica;
$clientePJ->setNomefantasia("jon Olivia");
$clientePJ->setCNPJ("12.123.456/0001-01");
$clientePJ->setAnoFundacao(2012);


?>
<!-- <pre> <?=var_dump($clientePF)?> </pre> -->
<pre> <?=var_dump($clientePJ)?> </pre>


</body>
</html>