<?php
require_once "Usuario.php";
class professor extends Usuario {
    private $disciplina;
    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }
    public function getdisciplina() {
        return $this->disciplina;
    }
    public function exibirInfo() {
        return parent::exibirInfo() . " |disciplina: {$this->disciplina}";
    }
    public function darAula(){
        return "{$this->nome} está dando aula de {$this->disciplina}.";
    }
}