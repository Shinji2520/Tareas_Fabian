<?php
	
	
	include_once ("variables.php");

	 $peliculas = mysql_query("SELECT * FROM peliculas");
	 
	 $titulo_pagina = "Las mejores peliculas";

?>

<!DOCKTYPE HTML>
<html>

<head>
	<?php include_once("head.php"); ?>

</head>

<body>
	<header>
		<h1><?php echo $titulo_sitio; ?></h1>

		<?php include_once("menu.php"); ?>
	</header>
	
	<?php 
		while ($row = mysql_fetch_array($peliculas)) {
			echo "<a href='pelicula.php?id=".$row['id']."'>";
			echo "<div class='pelicula'>";
			echo $row['id']. "-";
			echo $row['nombre'];
			echo "<img src='img/peliculas/poster/".$row['poster'] ."'/>";
			echo "<br/>";
			echo "</div>";
			echo "</a>";
		};
	?>

</body>


</html>