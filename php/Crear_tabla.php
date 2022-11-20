<?php
 //codigo para crear la tabla haciendo conexion desde aqui
// $servidor = "localhost";
// $nombreusuario = "root";
// $contrasenia = "12345678";
// $nombreBD = "bdunad33";

// // Crear conexion --Create connection
// $conexion = mysqli_connect($servidor, $nombreusuario, $contrasenia, $nombreBD);
// // Verificando conexion --Check connection
// if (!$conexion) {
//     die("Connection failed: " . mysqli_connect_error());
// }

//conexion externa
// Creando tabla en sql  --sql to create table

require('ConexionBD.php');

$tabla = "CREATE TABLE tabla33 (
codigoproducto INT(20) PRIMARY KEY,
nombreproducto VARCHAR(50),
marcaproducto VARCHAR(50),
preciocompra INT(10),
cantidadproducto INT(10)
)";

if (mysqli_query($conexion, $tabla)) {
    echo "Tabla33 creada exitosamente en la base de datos bdunad33.";
} else {
    echo "Error creando la tabla33. " . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 