<?php
// Exemplo-geral.php

class Exemplo {
    //Atributos ou Prorpiedades
    public string $nome;
    public string $escola;
    public string $cidade;
    }

// Criar Objetos/instâncias
$exemploA = new Exemplo;
$exemploB = new Exemplo;

echo "<pre>";
var_dump($exemploA);
var_dump($exemploB);
echo "</pre>";
?>