<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcomeAl.php");
    exit;
}
 
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifica si el campo usuario está vacío 
    if(empty(trim($_POST["mat"]))){
        $username_err = "Ingresa tu matrícula.";
    } else{
        $username = trim($_POST["mat"]);
    }
    
    // Verifica si el campo contraseña está vacio
    if(empty(trim($_POST["password"]))){
        $password_err = "Ingresa tu contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT matricula, nombre FROM alumnos WHERE matricula = '$username'";
        $stmt = mysqli_query($link, $sql);

        if($row=mysqli_fetch_array($stmt)){
        	if($row['matricula']==$password){
        	   // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $row['nombre'];                          
                            
                            // Redirect user to welcome page
                            header("location: welcomeAl.php");
            } else{
                            // Display an error message if password is not valid
                            $password_err = "No existe matrícula.";
                            header("location: ../error.php");
         
        	}
        }else{
                    // Display an error message if username doesn't exist
                    $username_err = "Alumno no registrado";
                    header("location: ../error.php");
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }else{
                echo "Error";
                header("location: ../error.php");
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 