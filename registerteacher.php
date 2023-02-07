<?php

session_start();
include("./global/conexion.php");

include "../template/modules/view_teacher.php";


if (isset($_SESSION['email'])) {
    header('Location:view_teacher.php');
}


error_reporting(E_ALL);
ini_set('display_errors', '1'); 

if(isset($_POST["registrar"])){
    $name = mysqli_real_escape_string($conexion, $_POST["name"]);
    $email =  mysqli_real_escape_string($conexion, $_POST["email"]);
    $phone = mysqli_real_escape_string($conexion,$_POST["phone"]);   	
    $password = mysqli_real_escape_string($conexion,$_POST["password"]);
    // $pass_encryp = sha1($password);

    $sql = "SELECT id FROM teacher WHERE email='$email'";
    $result = $conexion -> query($sql);
    $filas= $result-> num_rows;
    if($filas>0){
        echo "<script>
                alert('El email ya existe');
                windows.location = 'registerteacher.php';
            </script>";
    }else{
        $queryuser = "INSERT INTO teacher(`name`, `email`, `phone`, `password`) 
        VALUES('$name', '$email', '$phone', '$password')";
        $resultado = $conexion->query($queryuser);
        if($resultado > 0){
            echo "<script>
                alert('Los datos fueron ingresados correctamente');
                windows.location = 'registerteacher.php';
            </script>"; 
        }else{
            echo "<script>
                alert('Error al registro');
                windows.location = 'registerteacher.php';
                </script>";
        }
    }

}


include "header.php";
include "sidebar.php";

?>


<div class="container-fluid">
           
		   <div class="container justify-content-center align-items-center mt-5">

			   <div class="card p-5">
				   <h1>Register</h1>
				   <form action="enviar.php" method="POST" enctype="multipart/form-data">
					   <div class="row">
						   <div class=" col-6 form-group mb-3">
							   <label>Email</label>
							   <input type="email" required class="form-control" name="email" placeholder="Email">
						   </div>
						   <div class="col-6 form-group mb-3">
							   <label>Password</label>
							   <input type="password" required class="form-control" name="password" placeholder="Password">
						   </div>
					   </div>
					   <div class="form-group mb-3">
						   <label>Address</label>
						   <input type="text" required class="form-control" name="address" placeholder="1234 Main St">
					   </div>                       
					   <div class="form-group mb-3">
						   <label>Address 2</label>
						   <input type="text" required class="form-control" name="address2" placeholder="Apartament, studio, or floor">
					   </div>
					   <div class="row">
						   <div class="col-6 form-group mb-3">
							   <label>City</label>
							   <input type="text" required class="form-control" name="city" placeholder="City">
						   </div>
						   <div class="col-6 form-group mb-3">
							   <label>State</label>
							   <input type="text" required class="form-control" name="state" placeholder="State">
						   </div>
					   </div>
					   <div class="form-group mb-3">
						   <label class="mb-1">Imagen</label>
						   <input type="file" required class="form-control" name="imagen">
					   </div>

					   <div class="form-check">
						   <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
						   <label class="form-check-label">Check me out</label>
					   </div>

					   <button class="btn btn-primary mt-5" type="submit" name="registrar"> Registrar</button>
				   </form>

			   </div>
		   </div>


</html>