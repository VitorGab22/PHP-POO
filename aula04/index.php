<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP POO - Aula 02</title>
</head>
<body>
  <div>

  <pre>
    <?php
require_once 'caneta.php';

$c1 = new Caneta("BIC", "AZUL", 0.5);
$c2 = new Caneta("KKK", "Verde", 1.0);

print_r($c1);
print_r($c2);
// $c1->modelo = "BIC";
// print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
// print_r($c1);

    ?>
    </pre>
    </div>
</body>
</html>