<?php
/* Classes bastratas NÃO PODEM SER INSTANCIADAS. Ou seja, n]ão é possível criar um objeto/variável a partir dsta clase */

class Cliente {
    private string $nome;
    private string $email;
    private string $senha;
    
    /* Métodos getters e setters */
    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
}