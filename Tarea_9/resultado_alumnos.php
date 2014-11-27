<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "Detalle alumno";
  $variable = $_GET['id'];
  $alumnos = mysql_query("SELECT * FROM alumnos WHERE id= $variable");

 


?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<!--echo muestra lo almacenado en una variable-->
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
<table>
			<tbody>
				<tr>
					<th>ID</th>
					<th>Nombre Completo</th>
					<th>Edad</th
					<th>Cuenta</th>
					<th>Telefono</th>
					<th>Direccion</th>
					

				</tr>
		<?php 
			
			include_once('menu.php');
			//mientras tengas datos en cada una de la licenciatura, muestrame parrafo que contenga el nombre de la licenciatura.
			while($row = mysql_fetch_array($alumnos)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td> <a href='detalle_alumno.php?id=".$row['id']."'>".$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']."</a></td>";
				echo "<td>" . $row['edad'] . "</td>";
				echo "<td>" . $row['cuenta'] . "</td>";
				echo "<td>" . $row['telefono'] . "</td>";
				echo "<td>" . $row['direccion'] . "</td>";


			
				echo "</tr>";

			}
			
			
			?>	
			</tbody>
		</table>	
			
</body>
</html>