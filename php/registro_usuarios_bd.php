<?php

include ' conexion_bd.php';
$nombre_completo= $_POST['nombre']
$correo_electronico= $_POST['correo']
$nombre_de_usuario = $_POST['usuario']
$telefono= $_POST['telefono']
$contraseña= $_POST['contraseña']
$confirmacion_contraseña= $_POST['confirmacion']

$query = "INSERT INTO usuarios(Nombre__completo,correo__electrónico,nombre_de_usuario, numero, contraseña,confirmacion__de__contraseña)
          VALUES('$nombre_completo', '$correo_electronico','$nombre_de_usuario', '$telefono','$contraseña', $confirmacion_contraseña);

$ejecutar = mysquli_query ($conexion,$query);

?>