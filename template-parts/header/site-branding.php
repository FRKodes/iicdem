<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<!-- <div class="wrap"> -->
		<div class="logo-container">
			<img id="logo" src="<?php echo get_template_directory_uri().'/assets/images/logo-iicdem.svg'; ?>" alt="Logo <?php bloginfo('name'); ?>">
		</div>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title italic"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">INSTITUTO IBEROAMERICANO<br><b>DE CIENCIAS DEL DEPORTE</b><br>Y EL MOVIMIENTO HUMANO</a></h1>
			<?php else : ?>
				<p class="site-title italic"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">INSTITUTO IBEROAMERICANO<br><b>DE CIENCIAS DEL DEPORTE</b><br>Y EL MOVIMIENTO HUMANO</a></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->
		
		<div class="nav-button">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
		</div>
		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down">
			<?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?>
			<span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span>
		</a>
	<?php endif; ?>

	<!-- </div> -->
</div><!-- .site-branding -->
