<?php
namespace Biblioteca;
class Livro {
    // Propriedaes (ou Atributos)
    private string $titulo;
    private string $autor;
    private int $paginas= 0;

    





 /* Métodos getters e setters 

public function getTitulo():string {
    return $this->titulo;
}
public function setTitulo(string $titulo) {
    $this->titulo=$titulo;
}

public function getAutor():string {
    return $this->autor;
}
public function setAutor(string $autor) {
    $this->autor=$autor;
}

public function getPaginas():int {
    return $this->paginas;
}
public function setPaginas(int $paginas) {
    $this->paginas=$paginas;
}
*/

    /**
     * Get the value of titulo
     *
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param string $titulo
     *
     * @return self
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     *
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @param string $autor
     *
     * @return self
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of paginas
     *
     * @return int
     */
    public function getPaginas(): int
    {
        return $this->paginas;
    }

    /**
     * Set the value of paginas
     *
     * @param int $paginas
     *
     * @return self
     */
    public function setPaginas(int $paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }
}

