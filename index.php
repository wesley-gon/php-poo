<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de fixação PHH POO</title>
</head>
<body>
    <h1>Atividade de Fixação 2</h1>
    <hr>


<?php 
//Importando a Classe

require_once "src/LivroProgramacao.php";

//Criação dos objetos
$livroProgramacao = $livroTecnico = new Livrotecnico;



// Atribuindo dados às propriedades do objeto
$livroTecnico->setTitulo("HTM e CSS");
$livroTecnico->setAutor("Maljor");
$livroTecnico->setFormato(["Fisico"]);


$livroProgramacao->setTitulo("HTM e CSS");
$livroProgramacao->setAutor("Maljor");
$livroProgramcao->setFormato(["Fisico"]);
$livroProgramcao->setArea("Web");
?>

<h2>Lista de Livros</h2>
<h3> <?= $livroTecnico->getTitulo() ?> </h3>
<p> Autor: <?= $livroTecnico->getAutor() ?> </p>
<p> <?= $livroTecnico->getPaginas() ?> paginas  </p>
<p> <?= $livroTecnico->getFormato() ?></p>


<h3> <?= $livroProgramacao->getTitulo() ?> </h3>
<p> Autor: <?= $livroProgramacao->getAutor() ?> </p>
<p> <?= $livroProgramacao->getPaginas() ?> paginas  </p>
<p> <?= $livroProgramacao->getFormato() ?></p>
<p> <?= $livroProgramacao->getArea() ?></p>


<!-- <pre> <?=var_dump($livroProgramacao)?></pre> -->
</body>
</html>