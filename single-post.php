

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
		<section class="post">
			<div class="container">
					
				<article class="post">
					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail('large'); ?>
					<div class="full-content">
						<?php 
							global $post;
							setup_postdata($post);
							the_content($post); 
						?>

					</div>

					<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>	

					<?php if (strlen(get_previous_post()->post_title) > 0) : ?>
						<p>Anterior: <?php previous_post_link( '<strong>%link</strong>' ); ?></p>
					<?php endif;  ?>

					<?php if (strlen(get_next_post()->post_title) > 0) : ?>
						<p>Siguiente: <?php next_post_link( '<strong>%link</strong>' ); ?></p>
					<?php endif;  ?>
										
					

				</article>
				
			</div>
		</section>
		<style>
			.post .container {
				padding: 130px 0 50px;
				max-width: 1300px;
				margin: 0 auto;
			}
		</style>
		<?php get_footer( ); ?>
	</body>
</html>