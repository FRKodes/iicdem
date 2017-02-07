<?php
/**
 * Template part for displaying page content in page-acerca-de.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage IICDEM
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="row">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="row">
			<div class="members-container">
				
				<?php 
				$args = array( 'post_type' => 'miembro', 'posts_per_page' => 10, 'orderby' => 'member_order','order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
					
					<div class="member-item">
						<div class="col-sm-6 photo">
							<h2 class="title azul mayus"><?php the_title() ?></h2>
							<figure class="member-photo-container"><img class="member-photo" src="<?php the_post_thumbnail(); ?>" alt="<?php the_title(); ?>"></figure>
							<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
							<div class="position verde0 italic"><?php the_field('puesto'); ?></div>
							<?php if( get_field('resena') ): ?>
								<a href="<?php the_field('resena'); ?>" title="Ver reseña completa de <?php the_title(); ?>" target="_blank" class="btn btn-primary review-link mayus">Ver reseña</a>
							<?php endif; ?>
						</div>
						<div class="col-sm-6 info hidden-xs"><?php the_content(); ?></div>
					</div><?php

				endwhile;
				?>
				
			</div>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
