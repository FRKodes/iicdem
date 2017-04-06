<?php /* Template Post Type: Evento */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 single-inner-text">
					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php if (get_field('adjunto')) { ?>
							<p class="text-center"><a target="_blank" class="btn btn-primary azul_" style="width:auto" href="<?php the_field('adjunto'); ?>">Mayores informes haciendo clic aquí</a></p>
						<?php } ?>
					<?php endwhile; ?>
					<?php else : ?>
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>"><h1>Not Found</h1></div>
					<?php endif; ?>

					<h2 class="text-center">
						<?php if (get_field('link')) { ?>
							<a class="btn btn-primary azul" style="width:auto" href="<?php the_field('link'); ?>">Regístrate aquí</a>
						<?php } else { ?>
							<a class="btn btn-primary azul" style="width:auto" href="/pre-registro?id=<?php the_ID(); ?>">Regístrate aquí</a>
						<?php } ?>
						
					</h2>

				</div>
			</div>
		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>