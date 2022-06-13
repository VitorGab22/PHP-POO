<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Aluno
 *
 * @author Vitor
 */
require_once './Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    public function pagarMensalidade(){
        echo '<p>Pagando mensalidade do aluno $this->getNome</p>';
    }
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
