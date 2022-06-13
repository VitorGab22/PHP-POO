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
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
public final function fazerAniversario() {
    $this->idade ++;
}
function getNome() {
    return $this->nome;
}

function getIdade() {
    return $this->idade;
}

function getSexo() {
    return $this->sexo;
}

function setNome($nome): void {
    $this->nome = $nome;
}

function setIdade($idade): void {
    $this->idade = $idade;
}

function setSexo($sexo): void {
    $this->sexo = $sexo;
}


}
