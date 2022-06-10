<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de fixação PHH POO</title>
</head>
<body>
    <h1>Atividade de Fixação</h1>
    <hr>


<?php 
//Importando a Classe
require_once "src/Livro.php";

//Criação dos objetos
$livroA = new Livro;
$livroB = new Livro;

// Atribuindo dados às propriedades do objeto
$livroA->setTitulo("Senhor dos Anéis - A sociedade do Anel");
$livroA->setAutor("J.R.R. Tolkie");
$livroA->setPaginas (1050);

$livroB->setTitulo("Jogos Vorazes - Em chamas");
$livroB->setAutor("Suzanne Collins");
$livroB->setPaginas(423);


?>

<h2>Lista de Livros</h2>
<h3> <?= $livroA->getTitulo() ?> </h3>
<p> Autor: <?= $livroA->getAutor() ?> </p>
<p> <?= $livroA->getPaginas() ?> paginas  </p>

<h3> <?= $livroB->getTitulo() ?> </h3>
<p> Autor: <?= $livroB->getAutor() ?> </p>
<p> <?= $livroB->getPaginas() ?> paginas </p>


<!-- <pre> <?=var_dump($livroA, $livroB)?></pre> -->
</body>
</html>