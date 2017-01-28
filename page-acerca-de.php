<?php
/**
 * The template for displaying acerca de page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IICDEM
 * @subpackage IICDEM Theme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Forget this shit below!
			 */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page-acerca-de' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			<div class="row">
				<div class="col-sm-6">
					<h2 class="title"><span class="icon-bulls-eye verde0"></span>MISIÓN</h2>
					<p><?php echo get_post_meta($post->ID, 'mision', true); ?></p>
				</div>
				<div class="col-sm-6">
					<h2 class="title"><span class="icon-plane verde0"></span>VISIÓN</h2>
					<p><?php echo get_post_meta($post->ID, 'vision', true); ?></p>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();