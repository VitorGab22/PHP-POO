<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Bolsista
 *
 * @author Vitor
 */
require_once './Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>"; 
    }
    
    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
