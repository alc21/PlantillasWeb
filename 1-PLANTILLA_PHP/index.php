<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Titulo del sitio</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas-generales.php');
			?>
		<META name="keywords" content="etiquetas, clave, plantilla, web, fryntiz" /><!--Etiquetas-->
		<META name="subject" content="Descripción muy muy muy breve" /><!--Descripción cortísima-->
		<META name="description" content="Breve Resumen de la página WEB" /><!--Breve resumen-->
		<META name='revised' content='Tuesday, February 12th, 2017, 13:22 pm' /><!--Última revisión del sitio-->

		<!--Metaetiquetas para mostrar WEB en Facebook-->
		<META property='og:title' content='Titulo de la página' />
		<META property='og:description' content='Descripción' />
		<META property='og:image' content='http://www.dominioDelSitioWEB.es/img/logo.png' /><!--Miniatura que se mostrará junto al enlace-->

		<!--Metaetiquetas para mostrar WEB en Twitter-->
		<META name="twitter:title" content="Nombre de la publicación en twitter" />
		<META name="twitter:description" content="Descripción de la página, máximo 200 caracteres" />
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo	'<DIV id="cajaContenido">';
			echo	'<DIV id="cajaEntradas">';
			include ('contenido.php');
			echo '</DIV>';
			include ('aside.php');
			echo	'</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
