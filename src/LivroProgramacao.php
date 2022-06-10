<?php
require_once "Livro.php";
require_once "Livro.Tecnico.php";

class LivroProgramacao extends LivroTecnico{
    private string $area;
    
    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}