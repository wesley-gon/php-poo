<?php
namespace Biblioteca;

class LivroTecnico extends Livro{
    private array $formato = ["Fisico", "Digital"];

    public function getFormato(): string
    {
        return implode(", ", $this->formato);
    }
    public function setFormato(array $formato)
    {
        $this->formato = $formato;

        return $this;
    }
}