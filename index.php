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


		<div class="swiper-container">
			<div class="swiper-wrapper">

				<?php
					$loop = new WP_Query( array(
							'post_type' => 'titulo_inicio_slider',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order'   => 'ASC',
						)
					);
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="swiper-slide">
						<div class="slide-container">
							<div class="content-left">
								<div class="line"></div>
								<h3><?php the_content(); ?></h3>
								<a href="<?php echo get_site_url();?>/servicios">Descubre cómo <span class="plus">+</span></a>
							</div>
							<?php
								$url = wp_get_attachment_url( get_post_thumbnail_id(), 'full');
							?>
							<div class="content-right" style="background-image: url('<?php echo $url;?>')">
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_query(); ?>	
				
			
			</div>
			<div class="swiper-pagination"></div>
		</div>


		<div class="animation-container">
			<div class="thinkings">
				<a href="servicios.html#footer" class="thinking explicit hide-desktop">Llámame</a>
				<a href="servicios.html#footer" class="thinking explicit">Agenda una reunión</a>
				<a href="servicios.html" class="thinking explicit">Conócenos</a>
			</div>
			<img class="character first" src="<?php echo get_template_directory_uri();?>/assets/images/oso_sabio1.png" alt="DH Corp Oso">
			<img class="character second" src="<?php echo get_template_directory_uri();?>/assets/images/oso_sabio2.png" alt="DH Corp Oso">
		</div>

		<?php get_footer( ); ?>

		<script>
            $('.character').click(function() {
                $('.thinkings').animate({
                    opacity:1                   
                },2000);
                $('.second').animate({
                    opacity:1                   
                },4000);
                $('.first').animate({
                    opacity:0                 
                },4000);
            });
        </script>

		</body>
</html>