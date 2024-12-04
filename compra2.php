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
          <img src="data:image/jpeg;base64,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" alt="" width="90px" height="90px"> 
          <div class="j1"><p>EROS PARFUM, VERSACE, VSC-012, 100ML</p>
              <p class="j3">$120,000,00</p>
            <p class="j3">Cantidad:1</p>
            <p class="j3">SKU: 149801303489</p>
          </div>
        </div>
        
        <br>
        <div class="j2"></div>

        <br>
               
              
        <div class="j4">
              <p class="j1">Articulo</p>
              <p class="j5">$120,000,00</p>
         </div>
         <div class="j4">
              <p class="j1">Envio</p>
              <p class="j6">Gratis</p>
         </div>
         <div class="j4">
              <p class="j1">IVA</p>
              <p class="j7">$18,010</p>
         </div>

         <br>
        <div class="j2"></div>

        <br>

        <div class="j4">
              <p class="j1">Total</p>
              <p class="j8">$138,010,00</p>
         </div>
            <br>



     </div>    


         

          

     </section> 


     
   

     <footer class="fin">
        <p>&copy; 2024 Tienda en Línea</p>
    </footer>
</body>   

</html>