<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Desafio</title>
</head>
<body>
    <h1>Atividade desafio</h1>
    <h1> </h1>
    <hr>


<?php 
/* Require do autoload de classes  */
require_once "vendor/autoload.php";

$request = new Biblioteca\Livro();

/* é possível usar o "use Exercicios\{ todas as clares}" cmo se fosse uma matriz do namespace, e dai tu chama só o nome da classe   */


//Criação dos objetos
$livroTecnico = new Biblioteca\LivroTecnico;
$livroProgramacao = new Biblioteca\LivroProgramacao;
$livroDidatico = new Biblioteca\LivroDidatico;

$LivroWeb = new Biblioteca\Web;



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