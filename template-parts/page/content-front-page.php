<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<div class="main-banners-container">
		<?php 
		$args = array( 'post_type' => 'banner', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();?>

			<div class="item">
				<img src="<?php the_post_thumbnail(); ?>" alt="<?php the_content(); ?>">
				<div class="banner-info-container">
					<div class="banner-title mayus"> <?php the_title(); ?></div>
					<div class="banner-description mayus"> <?php the_content(); ?> </div>
				</div>
			</div><?php

		endwhile;
		?>
	</div>

	<div class="home-next-events panel-content">
		<div class="wrap">
			
			<div class="block-title"><span>PRÓXIMOS EVENTOS</span></div>
			<div class="events-container">
				<?php 
				$args = array( 'post_type' => 'evento', 'posts_per_page' => 3, 'orderby' => 'fecha', 'order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="item">
						<div class="calendar">
							<div class="month mayus"><?php echo printMonth(substr(get_field('fecha'), 4,-2)); ?></div>
							<div class="day"><?php echo substr(get_field('fecha'), 6); ?></div>
							<div class="triangle"></div>
						</div>
						<div class="description"><a class="verde0" href="<?php the_field('link'); ?>" title="Ver detalle <?php the_title(); ?>"><?php the_title(); ?></a></div>
					</div><?php
				endwhile;
				?>
			</div>
		</div>
	</div>
	
	<div class="home-allies panel-content">
		
		<div class="wrap">
			<div class="block-title"><span>NUESTROS ALIADOS</span></div>
			<div class="allies-container">
				<div class="item-allie iisb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iisb.svg" alt="logo iisb"></div>
				<div class="item-allie gse"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g-se.svg" alt="logo g-se"></div>
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/esportiva.svg" alt="logo esportiva"></div>
				<div class="item-allie breezing"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/breezing.svg" alt="logo breezing"></div>
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/evolution.svg" alt="logo evolution"></div>
			</div>
		</div>

	</div>

</article><!-- #post-## -->