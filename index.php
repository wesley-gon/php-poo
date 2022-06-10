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
require_once "src/LivroDidatico.php";

//Criação dos objetos
$livroTecnico = new LivroTecnico;
$livroProgramacao = new LivroProgramacao;
$livroDidatico = new LivroDidatico;




// Atribuindo dados às propriedades do objeto
$livroTecnico->setTitulo("HTM e CSS");
$livroTecnico->setAutor("Maljor");
$livroTecnico->setFormato(["Fisico"]);


$livroProgramacao->setTitulo("HTM e CSS");
$livroProgramacao->setAutor("Maljor");
$livroProgramacao->setFormato(["Fisico"]);
$livroProgramacao->setArea("Web");

$livroDidatico->setTitulo("HTM e CSS");
$livroDidatico->setAutor("Maljor");
$livroDidatico->setFormato(["Fisico", "digital"]);
$livroDidatico->setDisciplina("Matemática");
$livroDidatico->setNivel(["Superior"]);  
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
<p> Área:  <?= $livroProgramacao->getArea() ?></p>


<h3> <?= $livroDidatico->getTitulo() ?> </h3>
<p> Autor: <?= $livroDidatico->getAutor() ?> </p>
<p> <?= $livroDidatico->getPaginas() ?> paginas  </p>
<p> <?= $livroDidatico->getFormato() ?></p>
<p> <?= $livroDidatico->getDisciplina() ?></p>
<p> <?= $livroDidatico->getNivel() ?></p>



<!-- <pre> <?=var_dump($livroDidatico)?></pre> -->
</body>
</html>