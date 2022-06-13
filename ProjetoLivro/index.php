<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once './Livro.php';
        
        $p[0] = new Pessoa("Joaozin",15, "M");
        $p[1] = new Pessoa("Joana",18,"F");
        
        $l[0] = new Livro("PHP Básico", "José da Silva", 300 , $p[0]);
        $l[1] = new Livro("Aprender code", "Dev", 400, $p[0]);
        $l[2] = new Livro("programacao", "dev marcao", 200 , $p[0]);
        
        $l[0]->abrir();
        $l[0]->folhear(80);
        
        $l[0]->detalhes();
        $l[1]->detalhes();
        $l[2]->detalhes();
        ?>
        </pre>
    </body>
</html>
