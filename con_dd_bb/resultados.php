<!DOCTYPE html>
<?php
   //incluimos el archivo encargado de mostrar los productos
   require"devuelve_productos.php";

   //Creamos una instancia de la  clase devuelve productos

     $productos = new DevuelveProductos();

     $array_productos=$productos->get_productos();
?>
<html>

<head>
    <title>Hello!</title>
</head>

<body>

<?php

 //recorremos el array
           //la variable elemento contendrá los índices
 foreach($array_productos as $elemento)
 {

     echo"<table><tr><td>";
     echo $elemento['codigoarticulo']."</td><td>";
      echo $elemento['nombrearticulo']."</td><td>";
       echo $elemento['seccion']."</td><td>";
        echo $elemento['precio']."</td><td>";
         echo $elemento['fecha']."</td><td>";
          echo $elemento['importado']."</td><td>";
           echo $elemento['paisdeorigen']."</td><td></<tr> </table>";

            echo "<br>";
             echo "<br>";


 }
?>
