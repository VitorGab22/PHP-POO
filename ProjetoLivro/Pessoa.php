<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author Vitor
 */
class Pessoa {
    //put your code here
    private $nome;
    private $idade;
    private $sexo;

public function fazerAniver(){
    $this->idade ++;
}

public function __construct($nome, $idade, $sexo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
}

public function getNome() {
    return $this->nome;
}

public function getIdade() {
    return $this->idade;
}

public function getSexo() {
    return $this->sexo;
}

public function setNome($nome): void {
    $this->nome = $nome;
}

public function setIdade($idade): void {
    $this->idade = $idade;
}

public function setSexo($sexo): void {
    $this->sexo = $sexo;
}



}

