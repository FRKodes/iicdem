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
				<div class="item">
					<div class="calendar">
						<div class="month">FEB</div>
						<div class="day">02</div>
						<div class="triangle"></div>
					</div>
					<div class="description">Certificaciones internacionales ISAK 1, ISAK 2</div>
				</div>

				<div class="item">
					<div class="calendar">
						<div class="month">MAR</div>
						<div class="day">12</div>
						<div class="triangle"></div>
					</div>
					<div class="description">Certificaciones internacionales ISAK 1, ISAK 2</div>
				</div>

				<div class="item">
					<div class="calendar">
						<div class="month">ABR</div>
						<div class="day">30</div>
						<div class="triangle"></div>
					</div>
					<div class="description">Certificaciones internacionales ISAK 1, ISAK 2</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="home-allies panel-content">
		
		<div class="wrap">
			<div class="block-title"><span>NUESTROS ALIADOS</span></div>
			<div class="allies-container">
				<div class="item-allie iisb"></div>
				<div class="item-allie gse"></div>
				<div class="item-allie esportiva"></div>
				<div class="item-allie breezing"></div>
				<div class="item-allie evolution"></div>
			</div>
		</div>

	</div>

</article><!-- #post-## -->