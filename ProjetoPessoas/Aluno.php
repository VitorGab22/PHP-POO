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
    private $matr;
    private $curso;
    
    public function cancelarMatr(){
            echo "<p>Matricula será cancelada</p>";
    }
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr): void {
        $this->matr = $matr;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
