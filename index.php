<?php
session_start();
  $conex = mysqli_connect("127.0.0.1:33065","root","","users_dataset");
  if(isset($_POST['ent'])){
    if(strlen($_POST['user'])>=1 && strlen($_POST['password'])>=1){

      $user= $_POST['user'];
      $password= $_POST['password'];
      $sql="SELECT* FROM users where user = '$user' and passwords = '$password' ";
      $resultado=mysqli_query($conex,$sql);
      $filas=mysqli_num_rows($resultado);
      if ($filas){
        header( 'location:portafolio.php');
         
      } else {
        echo "<script> alert('Usuario no registrado'); </script>";
      }
      mysqli_free_result($resultado);
      mysqli_close($conex);  
    }
  }  
?>

<!doctype html>
<html lang="en">
<head>
<title>login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
    
            <lable><h1>Iniciar Sesion</h1></label>
            <hr>
            Usuario:
            <input class="form-control" type="text" name="user" placeholder="Ingrese Usuario" id="">
            <br/>
            Clave: <input class="form-control" type="password" name="password" placeholder="Ingrese Clave" id="">
            <hr>
            <button type="submit" name="ent"> 
            
            Entrar 
            </button><a href="registro.php">Registrarse</a>
    </form>


</body>

</html>