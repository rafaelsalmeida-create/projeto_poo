<?php
// Classe pai - usuario
class Usuario {
    protected $nome;
    protected $email;

public function __construct($nome, $email) {
    $this ->nome = $nome;
    $this ->email = $email;
}
    public function getNome() {
        return $this->nome;
    }
    public function getemail() {
        return $this->email;
    }
    public function exibirInfo(){
        return "Nome: {$this->nome}";
    }
}
