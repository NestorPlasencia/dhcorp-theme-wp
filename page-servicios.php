<!DOCTYPE html>
<html <?php language_attributes( ); ?> >
	<head>
		<meta <?php bloginfo( 'charset' ); ?> >
		<title>DH Corp | Servicios</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<?php wp_head()?>
	</head>
	<body>		
		
		<?php get_header( ); ?>
		<section id="servicios">
			<div class="servicios-upper">
				<h2>NUESTROS SERVICIOS</h2>
				<p>¡Descubre lo que tu organización y equipos necesitan!</p>
			</div>
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
			<div class="servicios-container">
				<div id="example">
					<carousel-3d :controls-visible="true" :clickable="false" :width="700" :height="450" :display="3" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'">
						<?php
							$loop = new WP_Query( array(
									'post_type' => 'servicios_ofertados',
									'posts_per_page' => -1,
									'orderby' => 'index',
									'order'   => 'ASC',
								)
							);
						?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<slide :index="<?php echo get_field('index'); ?>">
								<figure>
									<?php the_post_thumbnail('full'); ?>
									<figcaption>
										<div class="description">
											<h2><?php the_title(); ?></h2>
											<p><?php echo get_field('resume'); ?></p>
										</div>
										<div class="button">
											<button onclick="showModal('<?php echo get_field('index'); ?>')">VER MÁS</button>
										</div>
										
									</figcaption>
								</figure>
							</slide>

						<?php endwhile; wp_reset_query(); ?>	
					</carousel-3d>
				</div>	
			</div>		  
		</section>
	
		
		<div id="service-modal" class="modal">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="modal-content modal-content-<?php echo get_field('index'); ?>">
				<span class="close" onclick="hideModal()">&times;</span>
				<header class="service-hero">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id(), 'full');?>
					<img class="hero" src="<?php echo $url;?>" alt="<?php the_title(); ?>">
				</header>
				<div class="service-content">
					<div class="service-description <?php echo get_field('description_class')?>">
						<h3 class="service-description-title"><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
					<div class="service-contact">
						<h4>¿Agendamos una reunión?</h4>		
						<?php include('c-contact.php'); ?>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>

        <?php get_footer( ); ?>
        
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js"></script>
        <script src="https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js"></script>
		<script>
			var modal = document.getElementById("service-modal");
			var close = document.getElementsByClassName("close")[0];
			function showModal(index){
				modal.classList.add('active');
				cleanModalContentActive();
				document.querySelector(`.modal-content-${index}`).classList.add('active');
				document.querySelector('body').classList.add('modal-open');
			}
			function cleanModalContentActive(){
				if(document.querySelector('.modal-content.active')){
					document.querySelector('.modal-content.active').classList.remove('active');
				}
			}
			function hideModal(){
				modal.className = 'modal'
				document.querySelector('body').classList.remove('modal-open')
			}
			window.onclick = function(event) {
				if (event.target == modal) {
					hideModal()
				}
			}
		</script>
        <script>

			new Vue({
				el: '#example',
				data: {
					slides: 6
				},
				components: {
					'carousel-3d': Carousel3d.Carousel3d,
					'slide': Carousel3d.Slide
				}
			})
			
		</script>
	</body>
</html>
