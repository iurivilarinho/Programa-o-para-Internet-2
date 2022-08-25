<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

  <!-- URL PARA RODAR ;) http://localhost/Lista%2003/pagina01.php?linhas=3&colunas=3 -->

    <?php
    
    $colunas = $_GET['colunas'];
    $linhas = $_GET['linhas'];
    $cont = 0;
    

    for($i = 1; $i <= $linhas; $i++){
        ?>
        <br>
        <?php
        for($j = 1; $j <= $colunas; $j++){
            $cor = rand(0,255);
            $cor2 = rand(0,255);
            $cor3 = rand(0,255);
            $cont = $cont +1;
            $cont ++;
            ?>
        <div style=" 
        background-color: rgb(<?php echo $cor;?>, <?php echo $cor2;?>, <?php echo $cor3;?>); 
        border: 1px solid black;
        width: 100px;
        height: 50px;
        display: inline-block;
        margin: 2px;">
        <?php echo $cont;?></div>

        <?php

        }
    }


    ?>
    
   
    </div>
  </body>
</html>