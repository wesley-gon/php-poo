<?php
class Cliente {
    // Propriedaes (ou Atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Método Construtor
    public function __construct(string $nome, string $email)
    {
        // this é uma variavel especial, sempre apontando para a referência da classe atualmente manipulada.
        $this->nome = $nome;
        $this->email = $email;
    }
}

