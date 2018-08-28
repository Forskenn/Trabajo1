<?php
	require_once("db.php");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE usuarios SET id=? , correo=? , password=?  WHERE id=?");
		$id=$_POST['id'];
		$correo = $_POST['correo'];
		$password= $_POST['password'];
		$sql->bind_param("sssi",$id, $correo, $password,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Usuario editado";
		} else {
			$error_message = "Problema encontrado";
		}

	}
	$sql = $conn->prepare("SELECT * FROM usuarios WHERE id=?");
	$sql->bind_param("i",$_GET["id"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$conn->close();
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>Editar contacto </title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="prueba.php" >Regresar a lista </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Editar</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>id</label></td>
			<td><input type="text" name="id" class="txtField" value="<?php echo $row["id"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Correo</label></td>
			<td><input type="email" name="correo" placeholder="Nombre@supramax.com.mx" pattern="^.+@supramax.com.mx" class="txtField" value="<?php echo $row["correo"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Password</label></td>
			<td><input type="text" name="password" class="txtField" value="<?php echo $row["password"]?>"></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit"  name="submit" value="Actualizar" class="demo-form-submit"></td>
		</tr>
	</tbody>	
</table>
</form>
</body>
</html>