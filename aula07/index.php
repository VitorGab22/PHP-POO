<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <div>

    <pre>
      <h1>Projeto Controle Remoto</h1>
      
      <?php
      require_once 'ControleRemoto.php';
      $c = new ControleRemoto();
      $c->ligar();
      $c->maisVolume();
      $c->abrirMenu();

      ?>
    </pre>
  </div>
</body>

</html>