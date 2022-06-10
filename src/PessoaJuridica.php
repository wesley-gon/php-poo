<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setcnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getanoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;
    }

    public function getnomeFantasia():string {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia) 
    {
        $this->nomefantasia = $nomeFantasia;
    }
}

?>