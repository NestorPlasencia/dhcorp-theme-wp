<?php
/*
Template Name: Post List
*/
?>

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
		<section id="post-list">
			<div class="container">
				<?php
					$loop = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => -1,
						)
					);
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<article class="post-resume">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('medium'); ?>
							<div class="content">
								<h2><?php the_title(); ?></h2>
								<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
								<p><?php the_excerpt(); ?></p><div class="center">
									<p class="button">Ver más</p>
								</div>
							</div>
						</a>	
					</article>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</section>
		<?php get_footer( ); ?>
	</body>
</html>