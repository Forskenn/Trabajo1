<?php 
require_once("db.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);	
$conn->close();		
?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Soporte-Supramax</title>
</head>
<img src="/Supramax/img/Supramax.jpg"  style="width:50%">
<body>
	
	<center>
	<br>
	 <a href="/Supramax/register.php"><img src="/Supramax/icon/mas.png" width="30" height="30"></a> 
		 <a href="/Supramax/inicio.php"><img src="/Supramax/icon/casa.png" width="30" height="30"></a> 
		 <br/>
		</center>
		 <hr>
	<table class="tbl-qa">	
		<thead>
			 <tr>
				<th class="table-header" width="20%">Correo </th>
				<th class="table-header" width="20%"> Password </th>
				
				<th class="table-header" width="20%" colspan="2">Accion</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["correo"]; ?></td>
				<td class="table-row"><?php echo $row["password"]; ?></td>
				
				<!-- action -->
				<td class="table-row" colspan="2"><a href="edit.php?id=<?php echo $row["id"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="delete.php?id=<?php echo $row["id"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Estas seguro de eliminar contacto?')" src="icon/delete.png"/></a></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>