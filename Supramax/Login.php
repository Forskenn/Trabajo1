<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$correo = $password = "";
$correo_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["correo"]))){
        $correo_err = 'Ingresa correo.';
    } else{
        $correo = trim($_POST["correo"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Ingresa password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($correo_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT correo, password FROM usuarios WHERE correo = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_correo);
            
            // Set parameters
            $param_correo = $correo;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($correo, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['correo'] = $correo;      
                            header("location: inicio.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'Este password no es valido.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $correo_err = 'No se encontró cuenta con ese correo.';
                }
            } else{
                echo "Algo salio mal intenta mas tarde.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connectionz
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supramax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;}
        .wrapper{ width: 350px; padding: 20px; }

    </style>
</head>
<body>
      <center>
    <div class="wrapper ">

  <img src="/Supramax/img/Supramax.jpg"  style="width:90%">
   <h2>Soporte Tecnico</h2>
        <p>Ingresa tus datos.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($correo_err)) ? 'has-error' : ''; ?>">
                <label>Correo</label>
                <input  type="email"  placeholder="Nombre@supramax.com.mx" pattern="^.+@supramax.com.mx"  title=" Ejemplo: nombre@supramax.com.mx" name="correo"  class="form-control" value="<?php echo $correo; ?>">
                <span class="help-block"><?php echo $correo_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"  value="Login">
            </div>
            <p>No tienes Usuario? <a href="register.php">Registrate</a>.</p>
        </form>
    </div>  
    </center>  
</body>
</html>


   



