<?php 
if($_POST){
    if(($_POST['newpassword'])!=($_POST['newpasswordconfirmation'])){
        echo "<script> alert('clave no coinside'); </script>";
    
}else{
  $conex = mysqli_connect("127.0.0.1:33065","root","","users_dataset");
  if(isset($_POST['reg'])){
    if(strlen($_POST['newuser'])>=1 && strlen($_POST['newpassword'])>=1){

     $newuser= trim($_POST['newuser']);
     $newpassword= trim($_POST['newpassword']);

     $sql="INSERT INTO `users` (`id`, `user`, `passwords`) VALUES (NULL, '$newuser', '$newpassword')";
     $resultado= mysqli_query($conex,$sql);
     if ($resultado){
        echo "<script> alert('inscrito correctamente'); </script>";
         
    } else {
        echo "<script> alert('Upss a ocurrido un error'); </script>";
    }
  }

 }
}
}
?>


<!doctype html>
<html lang="en">

<head>
<title>regitro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
  <body>
    <form action="registro.php" method="post">
    
          
          <lable><h1>Registrarse</h1></label>
          <hr>
          Usuario
          <input class="form-control" type="text" placeholder="Inresa Usuario" name="newuser" id="">
          <br/>
          Clave: 
          <input class="form-control" type="password" placeholder="Ingresa clave" name="newpassword" id="">
          <br/>
          Confirma Clave: 
          <input class="form-control" type="password" placeholder="Ingresa Clave" name="newpasswordconfirmation" id="">
          <hr>
          <button type="submit" name=reg> 
          Registrarse 
          </button><a href="index.php">Iniciar</a>
         
         
</form>


</body>

</html>
