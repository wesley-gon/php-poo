<?php
namespace Biblioteca;

class LivroDidatico extends LivroTecnico{
    private string $disciplina;
    private array $nivel = ["Básico", "Médio", "Superior"];
    

    public function getDisciplina(): string
    {
        return $this->diciplina;
    }
    public function setDisciplina(string $diciplina): self
    {
        $this->diciplina = $diciplina;

        return $this;
    }

    public function getNivel(): string
    {
        return implode(",", $this->nivel);
    }

    public function setNivel(array $nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}