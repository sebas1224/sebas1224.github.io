<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "web";

// Crear la conexión
$conecta = new mysqli($servidor, $usuario, $password, $bd);

// Verificar la conexión
if ($conecta->connect_error) {
    die("Error al conectar la base de datos: " . $conecta->connect_error);
} 


// Verificar si los datos se enviaron correctamente
if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['cel']) && isset($_POST['cedula']) && isset($_POST['producto']) && isset($_POST['pais']) && isset($_POST['direccion']) && isset($_POST['ciudad']) && isset($_POST['region']) && isset($_POST['codigo'])) {
    
    // Asignar las variables desde el formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['cel'];
    $cedula = $_POST['cedula'];
    $producto = $_POST['producto'];
    $pais = $_POST['pais'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $region = $_POST['region'];
    $codigo = $_POST['codigo'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO clientes (nombre, correo, telefono, cedula, producto, pais, direccion, ciudad, region, codigo) 
            VALUES ('$nombre', '$correo', '$telefono', '$cedula', '$producto', '$pais', '$direccion', '$ciudad', '$region', '$codigo')";

    if ($conecta->query($sql) === TRUE) {
        echo "Su pedido ya está en proceso";
        header("refresh:3;url=/web/barra.html");
        exit();
    } else {
        echo "Error al insertar: " . $sql . "<br>" . $conecta->error;
    }

} 

// Cerrar la conexión
$conecta->close();
?>