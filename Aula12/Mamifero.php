<?php
require_once './Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
class Mamifero extends Animal{
    private $corPelo;
    
    public function alimentar(){
        echo "<p>Mamando</p>";
    }

    public function emitirSom(){
        echo "<p>Som de mamífero</p>";
    }
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }


}
