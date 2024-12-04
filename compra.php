<?php 
include "incluir/conexion.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compras</title>
    <link rel="stylesheet" href="estilos/estilo5.css">
</head>
<body>

     <header class="encabesado">
        <img src="imagenes/logo2.png" alt="" width="75px" height="75px">
        <h2 class="centro">Aroma Mitico</h2>
     </header>
     <br>
     

     <section class="alineaccion">


     <form action="incluir/conexion.php" method="POST">
     <div class="rb">
            <div class="j10"><h3>Datos Del Clientes</h3></div>
            <br>
             <label class="j11" for="nombre">Nombre:</label><br>
             <input class="largo" type="text" id="nombre" name="nombre" required><br>
             <br>
             <label class="j11" for="correo">Correo:</label><br>
             <input class="largo" type="email" id="correo" name="correo" required><br>
             <br>
             <label class="j11"  for="cel">Teléfono:</label><br>
             <input class="largo" type="text" id="cel" name="cel" required><br>
             <br>
             <label class="j11" for="cedula">Numero De Cedula:</label><br>
             <input class="largo" type="text" id="cedula" name="cedula" required><br>
             <br>
             <label class="j11" for="producto">Confirmar Nombre Del Producto:</label><br>
             <input class="largo" type="text" id="producto" name="producto" required><br>
             <br>

             <div class="j10"><h3>Detalles Del Envio</h3></div>
             <br>
             <label class="j11" for="pais">Pais:</label><br>
             <input class="largo" type="text" id="pais" name="pais" required><br>
             <br>
             <label class="j11" for="direccion">Direccion:</label><br>
             <input class="largo" type="text" id="direccion" name="direccion" required><br>
             <br>
             <label class="j11" for="ciudad">Ciudad:</label><br>
             <input class="largo" type="text" id="ciudad" name="ciudad" required><br>
             <br>
             <label class="j11" for="region">Region:</label><br>
             <input class="largo" type="text" id="region" name="region" required><br>
             <br>
             <label class="j11" for="codigo">Codigo Postal:</label><br>
             <input class="largo" type="text" id="codigo" name="codigo" required><br>
             <br>

             <input class="j9" type="submit" value="Enviar">

             </div>


     </form>
     

     
     <div  class="cuadro">
     <div class="linea1"><p class="br">Infomacion del pedido</p></div> 
           <br>
           <div class="j2"></div>
           <br>

        <div class="linea1">
          <img src="imagenes/Homem-Dom.jpg" alt="" width="90px" height="90px"> 
          <div class="j1"><p>Perfume Homem Dom 100 Ml Natura Original- hombre </p>
              <p class="j3">$150,000,00</p>
            <p class="j3">Cantidad:1</p>
            <p class="j3">SKU: 8682241303489</p>
          </div>
        </div>
        
        <br>
        <div class="j2"></div>

        <br>
               
              
        <div class="j4">
              <p class="j1">Articulo</p>
              <p class="j5">$150,000,00</p>
         </div>
         <div class="j4">
              <p class="j1">Envio</p>
              <p class="j6">Gratis</p>
         </div>
         <div class="j4">
              <p class="j1">IVA</p>
              <p class="j7">$24,010</p>
         </div>

         <br>
        <div class="j2"></div>

        <br>

        <div class="j4">
              <p class="j1">Total</p>
              <p class="j8">$174,010,00</p>
         </div>
            <br>



     </div>    


         

          

     </section> 


     
   

     <footer class="fin">
        <p>&copy; 2024 Tienda en Línea</p>
    </footer>
</body>   

</html>