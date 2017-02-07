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
			<div class="col-sm-6 top-space">
				<?php the_content(); ?>
			</div>
			<div class="col-sm-6 text-center">
				<img class="about" src="<?php echo get_template_directory_uri().'/assets/images/about.jpg'; ?>" alt="<?php bloginfo('page'); ?>">
			</div>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
