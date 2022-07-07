<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'abm1'); 
 if (!$conn) { 
 die("Connection Failed");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Lista de Usuarios</title>
</head>
<body>

<!---------------------------------------------------->

<nav class="navbar ">
  <div class="container">
    <a class="navbar-brand apa" href="user_list.php">
      Volver Atras
    </a>
  </div>
</nav>

<!---------------------------------------------------->


<style>

.apa{
    margin-left: -25rem;
}

body{
   
    background-image: url(../image/bg2.jpeg);
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;

}

.table{
    width: 60rem;
    margin-top: 20rem;
}



</style>

<center>


<table class="table table-dark">
    <form action="../actualizar.php" method="POST">
  <thead>
  <tr>
  <th scope="col">#</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Operación</th>
      <th scope="col"></th>
    </tr>
    
    <?php
    $id = $_GET["id"];
    $sql="SELECT * FROM login WHERE id = '$id'";
    $result=mysqli_query($conn,$sql);
    
    
    while($mostrar=mysqli_fetch_array($result)){
    ?>

   
  </thead>
  <tbody>
    <tr>
        <td scope="row"><input name="id" value="<?php echo $mostrar['id']?>" ></td>
        <td><input type="text" name="correo" value="<?php echo $mostrar['correo']?>"></td>
        <td><input type="text" name="usuario" value="<?php echo $mostrar['usuario']?>"></td>
        <td><button type="submit" value="Actualizar"  class="btn btn-outline-success">ACTUALIZAR</button></td>

       </tr>
    <?php 
    }
    ?>
  </tbody>
  </form>
</table>

</center>

    
</body>
</html>