<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Lista 01</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
  </head>
  <body>
<table>
    <?php
    $class = "cor";
    $cont = 0;
   
    for($i = 0; $i <= 9; $i ++ ) {

        ?> 
        <tr>
        <?php

        for ($j = 0; $j <= 9; $j ++){
        
          $cor = rand(1,3);

          ?> 
            
          <td><div class="<?php echo $class, $cor;?>" >

          <?php
              
          $cont = $cont + 1;         
          echo("$cont"); 

          ?>
          <?php

          $cont;

          ?>

          </div> </td>
            
          <?php
       }
     ?>
     </tr>
     <?php
    }
   
  ?>
  </table>  
    
  </body>
</html>