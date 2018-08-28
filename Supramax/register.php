<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$correo = $password = $confirm_password = "";
$correo_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["correo"]))){
        $correo_err = "Ingresa  correo.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usuarios WHERE correo = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_correo);
            
            // Set parameters
            $param_correo = trim($_POST["correo"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $correo_err = "Este correo esta registrado.";
                } else{
                    $correo = trim($_POST["correo"]);
                }
            } else{
                echo "Algo salio mal intenta mas tarde.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Ingresa password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Ingresa 6 caracteres.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Por favor confirma tu password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password no coincide.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO usuarios (correo, password) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_correo, $param_password);
            
            // Set parameters
            $param_correo = $correo;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: inicio.php");
            } else{
                echo "Algo salio mal intenta mas tarde.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supramax Registro </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }

        input:invalid {
        border: 1px solid red;
    }
         input:valid {
       border: 1px solid green;
}
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <img src="/Supramax/img/Supramax.jpg"  style="width:90%">
        <h2>Registro</h2>
        <p>Crea tu usuario.</p>
        <tr class="table-row">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($correo_err)) ? 'has-error' : ''; ?>">
                <label>Correo</label>
                <input type="email"  placeholder="Nombre@supramax.com.mx" pattern="^.+@supramax.com.mx"  title=" Ejemplo: nombre@supramax.com.mx" name="correo"  class="form-control" value="<?php echo $correo; ?>">
                <span class="help-block"><?php echo $correo_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirma Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            </center>
        </form>
    </div>    
</body>
</html>