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
    <pre>
    <body>
        <?php
        require_once './Pessoa.php';
        require_once './Aluno.php';
        require_once './Funcionario.php';
        require_once './Professor.php';
        // put your code here
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Faniana");
        
        $p1->setSexo("M");
        $p4->setSexo("F");
        
        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
        
        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatr();
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
    </body>
    </pre>
</html>
