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
				<?php if (get_field('link')) { ?>
					<a class="blanco" href="<?php the_field('link') ?>" title="Ver detalle <?php the_title() ?>">
						<?php the_post_thumbnail(); ?>
						<div class="banner-info-container">
							<div class="banner-title mayus"> <?php the_title(); ?></div>
							<div class="banner-description mayus"> <?php the_content(); ?> </div>
						</div>
					</a>
				<?php } else { ?>
					<?php the_post_thumbnail(); ?>
					<div class="banner-info-container">
						<div class="banner-title mayus"> <?php the_title(); ?></div>
						<div class="banner-description mayus"> <?php the_content(); ?> </div>
					</div>
				<?php } ?>
				
			</div><?php

		endwhile;
		?>
	</div>

	<div class="home-next-events panel-content">
		<div class="wrap">
			
			<div class="block-title"><span>PRÓXIMOS EVENTOS</span></div>
			<div class="events-container">
				<?php 
				$args = array( 'post_type' => 'evento', 'orderby' => 'fecha', 'order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="item">
						<div class="calendar">
							<div class="month mayus"><?php echo printMonth(substr(get_field('fecha'), 4,-2)); ?></div>
							<input type="hidden" value="<?php echo printMonth(substr(get_field('fecha'), 4,-2)); ?>">
							<div class="day"><?php echo substr(get_field('fecha'), 6); ?></div>
							<div class="triangle"></div>
						</div>
						<div class="description"><a class="verde0" href="<?php echo get_permalink( $post->ID ); ?>" title="Ver detalle <?php the_title(); ?>"><?php the_title(); ?></a></div>
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
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/three-balance.svg" alt="logo three balance"></div>
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gatorade-sports-cience-institute.svg" alt="logo gatorade sports cience institute"></div>
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/redlac-logo.svg" alt="logo redlac"></div>
				<div class="item-allie"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iisb-logo.svg" alt="logo iisb"></div>
			</div>
		</div>

	</div>

</article><!-- #post-## -->