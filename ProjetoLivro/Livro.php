<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Livro
 *
 * @author Vitor
 */
require_once './Pessoa.php';
require_once './Publicacao.php';

class Livro implements Publicacao{
   private $titulo;
   private $autor;
   private $totPagina;
   private $pagAtual;
   private $aberto;
   private $leitor;


public function detalhes(){
    echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
    echo "<br> Páginas: ". $this->totPagina . " atual " .$this->pagAtual;
    echo "<br> Sendo lido por ".$this->leitor->getNome();
}

public function __construct($titulo, $autor, $totPagina, $leitor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPagina = $totPagina;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->leitor = $leitor;
}

public function getTitulo() {
    return $this->titulo;
}

public function getAutor() {
    return $this->autor;
}

public function getTotPagina() {
    return $this->totPagina;
}

public function getPagAtual() {
    return $this->pagAtual;
}

public function getAberto() {
    return $this->aberto;
}

public function getLeitor() {
    return $this->leitor;
}

public function setTitulo($titulo): void {
    $this->titulo = $titulo;
}

public function setAutor($autor): void {
    $this->autor = $autor;
}

public function setTotPagina($totPagina): void {
    $this->totPagina = $totPagina;
}

public function setPagAtual($pagAtual): void {
    $this->pagAtual = $pagAtual;
}

public function setAberto($aberto): void {
    $this->aberto = $aberto;
}

public function setLeitor($leitor): void {
    $this->leitor = $leitor;
}

    public function abrir() {
        $this->aberto =true;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p>$this->totPagina){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}