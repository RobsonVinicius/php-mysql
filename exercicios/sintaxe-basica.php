<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <!-- Onde fica -->
  <?php 
    // Isso é um comentário
  ?>

  <!-- Variáveis -->
  <?php 
    $curso = "Curso de php";
  ?>

  <!-- Imprimindo dados -->
  <?php 
    $curso = "Curso de php";
    echo $curso;
  ?>

  <!-- Condicionais -->
  <?php
    $numero = 10;
    if($numero > 5) {
      echo "Maior que 5!";
    } else {
      echo "Menor que 5";
    }
  ?>

  <!-- Repetições -->
  <?php
    for ($i=0; $i < 5; $i++) {
      echo "Laço de número: " . $i;      
    }
  ?>

  

  
</body>
</html>