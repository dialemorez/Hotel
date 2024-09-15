<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas.php');
			?>
		<META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo	'<DIV id="cajaContenido">';

			?>
<div class="gallery">
    <img src="hotel1.png" alt="hotel 1">
    <img src="hotel2.png" alt="hotel 2">
    <img src="hotel3.png" alt="hotel 3">
    <!-- Agrega más imágenes según sea necesario -->
</div>
<?php
			echo	'<DIV id="cajaEntradas">';
			
			echo '</DIV>';
			include ('aside.php');
			echo	'</DIV>';
			include ('footer.php');

			
		?>
	</BODY>
</HTML>