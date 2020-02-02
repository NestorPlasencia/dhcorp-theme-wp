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
		<section id="contact">
			<div class="wrapper">
				<div class="wrapper-header">
					<h2>CONTACTO</h2>
				</div>
				<div class="wrapper-body">
					<form action="">
						<div class="form-columns">
							<div>
								<label>Nombre*</label>
								<input type="text" required>
							</div>
							<div>
								<label>Celular*</label>
								<input type="number" required>
							</div>
							<div>
								<label>Email*</label>
								<input type="email" required>
							</div>
							<div>
								<label>Tipo de cita*</label>
								<select name="cita" id="cita">
									<option value="virtual">Virtual</option>
									<option value="presencial">Presencial</option>
								</select>
							</div>
						</div>
						<div class="form-textarea">
							<label>Mensaje*</label>
							<textarea rows="2" required></textarea>
						</div>
						<div class="text-center">
							<button>Enviar mensaje</button>
							<p>¿Quieres conversar con uno de nuestros asesores de servicio? Llama al (1) 460 5443</p>
							<span class="smaller">@2019 DH</span>
						</div>
					</form>
				</div>
			</div>
		</section>
		<?php get_footer( ); ?>

		</body>
</html>