<?php    
    //Base de datos
    require("connectDB.php");
    //Inicio de sesión
    session_start();
    //Variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $user = "";
    // $username_err = "";  
    // $password_err = "";
    
        //SQL
        $sql = "SELECT * FROM tbl_users WHERE email = '$username' and password = '$password' ";
         
        $process = mysqli_query($conection,$sql);
        
        $_SESSION['nombre'] = "lio";

        if ($result = mysqli_fetch_array($process)){
            $fila = mysqli_fetch_array($process);
            $_SESSION['user'] = $username;
            $nombre = $fila['name'];
            header("location:../profile.php");
        }else{
            $_SESSION['logueado'] = "error";
            header("location:../login.php");
        }    
        
        
        
?>