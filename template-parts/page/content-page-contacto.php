<?php
/**
 * Template part for displaying page content in page-contacto.php
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
			<div id="map"></div>
		</div>
			
		<div class="row">
			<div class="block-title"><span>CONTÁCTANOS</span></div>
			<div class="col-sm-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, magni ducimus. Ipsam hic numquam magnam explicabo, delectus porro quia vero eius eveniet quas aspernatur pariatur ullam, ipsa iure aut qui.
			</div>
			<div class="col-sm-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sequi dolorum vitae, dolorem, architecto culpa! Cupiditate facilis quas tenetur optio adipisci dolores fugiat, quibusdam laboriosam, necessitatibus sequi aliquid consectetur eveniet.
			</div>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
