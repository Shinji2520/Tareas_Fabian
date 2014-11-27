<?php
	
	
	include_once ("variables.php");

	
	 
	 $titulo_pagina = "Paises";

	 $paises= mysql_query("SELECT * FROM paises");
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
		while ($row = mysql_fetch_array($paises)) {
			echo $row['id']. "-";
			echo $row['nombre'];
			echo "<br/>";
		};
	?>
	

</body>


</html>