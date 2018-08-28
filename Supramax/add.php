<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		$sql = $conn->prepare("INSERT INTO usuarios (id,correo,password) VALUES (?, ?, ?)");  
		$id=$_POST['id'];
		$correo = $_POST['correo'];
		$password= $_POST['password'];
		$sql->bind_param("sss", $id, $correo, $password); 
		if($sql->execute()) {
			$success_message = " Usuario Agregado";
		} else {
			$error_message = "Upps Problema Encontrado";
		}
		$sql->close();   
		$conn->close();
	} 
?>
<html>
<head>
	<center>
<link href="style.css" rel="stylesheet" type="text/css" />
	 <img src="/Supramax/img/Supramax.jpg"  style="width:50%">
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Administrador-Supramax</title> 	
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="prueba.php"> Regresar a lista </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Agregar Contacto</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>Correo</label></td>
			<td><input type="text" name="correo" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Password</label></td>
			<td><input type="text" name="name" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Password</label></td>
			<td><input type="text" name="email" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="submit" value="Enviar" class="demo-form-submit"></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</center>
</html>