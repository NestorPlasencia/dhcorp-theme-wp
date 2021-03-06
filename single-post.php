

<!DOCTYPE html>
<html <?php language_attributes( ); ?> >
	<head>
		<meta <?php bloginfo( 'charset' ); ?> >
		<title>DH Corp | Post</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<?php wp_head()?>
	</head>
	<body>
	<?php get_header( ); ?>	
		<section id="post">
			<div class="container">
				<article class="post">
					<h1><?php the_title(); ?></h1>
					<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>	

					<?php the_post_thumbnail('large'); ?>

					<div class="full-content">
						<?php 
							global $post;
							setup_postdata($post);
							the_content($post); 
						?>
					</div>

					<div class="buttons">
						<?php if (strlen(get_previous_post()->post_title) > 0) : ?>
							<p>Anterior: <?php previous_post_link( '<strong>%link</strong>' ); ?></p>
						<?php endif;  ?>

						<?php if (strlen(get_next_post()->post_title) > 0) : ?>
							<p>Siguiente: <?php next_post_link( '<strong>%link</strong>' ); ?></p>
						<?php endif;  ?>
					</div>
				</article>
			</div>
		</section>
		<?php get_footer( ); ?>
	</body>
</html>