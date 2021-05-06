<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TRABAJO PRACTICO Nº4</title>
  </head>
  <body>
    <h1> EJERCICIO 1 </h1>
      <h2 style="color:BROWN">
      <?php
        $pares1al20 = array();
        for($cont = 0; $cont<20; $cont=$cont+2){
          $pares1al20[$cont] = $cont;
        }
        for($i = 0; $i<20; $i=$i+2){
           echo "$pares1al20[$i]<br>";
        }
      ?>
    </h2>
<hr>
    <h1> EJERCICIO 2 </h1>
      <h2 style="color:BLUE">
        <?php
        $arrayej2 = ["Pedro","Ana",34, 1,];
        print_r($arrayej2);          
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 3 </h1>
      <h2 style="color:GREEN">
        <?php
        $datospersonales = [
          "Nombre"=>"Pedro",
          "Apellido"=>"Torres",
          "Dirección"=>"Av. Mayor 3703",
          "Teléfono"=>"1122334455",
        ]
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 4 </h1>
      <h2 style="color:RED">
        <?php
        $ciudades=[
          "Madrid", 
          "Barcelona", 
          "Londres", 
          "New York", 
          "Los Ángeles",
          "Chicago",
        ];
        for($k = 0; $k<6; $k++){
          echo "La ciudad con el índice $k tiene el nombre $ciudades[$k].<br>";
        }
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 5 </h1>
      <h2 style="color:violet">
        <?php
        $ciudades1=[
          "MD", 
          "BCL",
          "LD", 
          "NY", 
          "LA",
          "CCG",
        ];
        $ciudades2=[
        "Madrid", 
        "Barcelona",
        "Londres", 
        "New York", 
        "Los Ángeles",
        "Chicago",
        ];
        for($k = 0; $k<6; $k++){
          echo "El índice de $ciudades2[$k] es $ciudades1[$k].<br>";
        }
        ?>
    </h2>
<hr>
  </body>
</html>
