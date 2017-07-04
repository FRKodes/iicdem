<?php
/**
 * Template part for displaying page content in page-pago-paypal-etc.php
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
	<header class="entry-header m-t-120">
		<?php the_title( '<h1 class="entry-title azul-text no-shadow">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content text-center">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 ">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
