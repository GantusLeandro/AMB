<?php
include ("conexion.php");


$id = $_GET['id'];
$eliminar = "DELETE FROM login WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
   header("Location: frontend/user_list.php");
} else{
    echo"<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
}

?>