<?php
include ("conexion.php");


$id = $_POST['id'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];

//asd//
$actualizar = "UPDATE login SET id = '$id', correo='$correo', usuario='$usuario' WHERE id = '$id'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado){
    echo"<script>alert('Se han actualizado los cambios correctamente, actualize la pagina para ver los cambios'); window.location='frontend/user_list.php';</script>";
 } else{
     echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
 }

?>