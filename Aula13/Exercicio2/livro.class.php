<?php
class Livro {
    private $Titulo;
    private $Autor;
    private $Disponivel;

    public function __construct($titulo, $autor, $disponivel) {
        $this->Titulo = $titulo;
        $this->Autor = $autor;
        $this->Disponivel = $disponivel;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getAutor() {
        return $this->Autor;
    }

    public function getDisponivel() {
        return $this->Disponivel;
    }

    public function Emprestar() {
        if ($this->Disponivel) {
            $this->Disponivel = false;
            return "O livro \"{$this->Titulo}\" foi emprestado.<br>";
        } else {
            return "O livro \"{$this->Titulo}\" não está disponível no momento.<br>";
        }
    }

    public function Devolver() {
        if (!$this->Disponivel) {
            $this->Disponivel = true;
            return "O livro \"{$this->Titulo}\" foi devolvido. Obrigado!<br>";
        } else {
            return "O livro \"{$this->Titulo}\" Volte sempre.<br>";
        }
    }

    public function ExibirStatus() {
        $status = $this->Disponivel ? "Disponível" : "Emprestado";
        return "O livro \"{$this->Titulo}\" está $status.<br>";
    }
}
?>
