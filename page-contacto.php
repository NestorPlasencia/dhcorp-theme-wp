<!DOCTYPE html>
<html <?php language_attributes( ); ?> >
	<head>
		<meta <?php bloginfo( 'charset' ); ?> >
		<title>DH Corp | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<?php wp_head()?>
	</head>
	<body>
		<?php get_header( ); ?>
		<?php
			if ( isset($_GET['sent']) ){
				if ( $_GET['sent'] == '1'){
					echo '<p class="alert alert-success active">Formulario enviado correctamente</p><br>';
				}
				else {
					echo '<p class="alert alert-danger active"> Hubo un error al enviar</p><br>';
				}
				echo '<script>setTimeout(function(){ document.querySelector(".alert.active").classList.remove("active"); }, 2500);</script>';
			}
		?>
		<section id="contact">
			<div class="wrapper">
				<div class="wrapper-header">
					<h2>CONTACTO</h2>
				</div>
				<div class="wrapper-body">
					<?php include('c-contact.php'); ?>
				</div>
			</div>
		</section>
		<?php get_footer( ); ?>

	</body>
</html>