<!DOCTYPE html>
<html <?php language_attributes( ); ?> >
	<head>
		<meta <?php bloginfo( 'charset' ); ?> >
		<title>DH Corp | Quienes Somos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<?php wp_head()?>
	</head>
	<body>		
		
		<?php get_header( ); ?>
		<section id="quienes-somos">
            <div class="container">
                <div class="content-left">
					<h2>Nuestro Director</h2>
					<p style="text-align: justify;">Desde hace años DH se ha dedicado exclusivamente a estudiar, entender y modelar el comportamiento de equipos de trabajo, persiguiendo siempre un solo ideal: impulsar ORGANIZACIONES FELICES y PRODUCTIVAS.</p>
					<p style="text-align: justify;">La experiencia lograda tanto en el Perú y el extranjero nos permitió especializarnos en la gestión de la conducta grupal humana en el trabajo.</p>
					<p style="text-align: justify;">Por eso proponemos servicios que ayuden a construir organizaciones inteligentes, con colaboradores proactivos, felices y con propósito.</p>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/director.png" alt="Hans">
				</div>
				<div class="content-right">
					<iframe height="315" src="https://www.youtube.com/embed/kBNrbBMkhgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<h2>Clientes</h2>
					<div class="clients">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/interseguro.png" alt="Interseguro">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/roxfarma.png" alt="Roxfarma">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/altran.png" alt="Altran">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/kairos.png" alt="Kairos">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/columbia.png" alt="Columbia">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/digitex.png" alt="Digitex">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/municipalidad-lima.png" alt="Municipalidad de Lima">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/cesvi.png" alt="Cesvi">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/usaid.png" alt="USAID">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/unicef.png" alt="Unicef">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/clinica-angloamericana.png" alt="Clinica Angloamericana">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/clinica-delgado.jpg" alt="Clinica delgado">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/konrad.png" alt="Konrad">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/medicusmundi.png" alt="Medicus Mundi">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/rikolto.png" alt="Rikolto">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/clients/pucp.jpg" alt="PUCP">
					</div>
				</div>
            </div>
		</section>
		<?php get_footer( ); ?>
		</body>
</html>