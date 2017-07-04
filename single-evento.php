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
					<?php endwhile; ?>

					<?php else : ?>
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>"><h1>Not Found</h1></div>
					<?php endif; ?>

					<?php if (get_field('imagen_programa_1')) { ?>
						<div class="imagen-programa">
							<img src="<?php the_field('imagen_programa_1') ?>" alt="Imagen programa <?php the_title() ?>">
						</div>
					<?php } ?>


					<?php if (get_field('imagen_programa_2')) { ?>
						<div class="imagen-programa">
							<img src="<?php the_field('imagen_programa_2') ?>" alt="">
						</div>
					<?php } ?>

					<?php if (get_field('adjunto')) { ?>
						<p class="col-xs-12 text-center m-top-30"><a target="_blank" class="btn btn-primary azul_" style="width:auto" href="<?php the_field('adjunto'); ?>">Mayores informes haciendo clic aquí</a></p>
					<?php } ?>

					<?php 
					$args_invitados_honor = array( 'post_type' => 'ponente',
									'meta_query'	=> array(
											'relation'		=> 'AND',
											array(
												'key'		=> 'invitado_especial',
												'value'		=> true,
												'compare'	=> '='
											),
											array(
												'key'		=> 'id_evento',
												'value'		=> $post->ID,
												'type'		=> 'NUMERIC',
												'compare'	=> '='
											)
										)
								);
					$loop_invitados_honor = new WP_Query( $args_invitados_honor );

					if ($loop_invitados_honor->have_posts()) { ?>
						<h2>INVITADOS DE HONOR</h2>
					<?php }

					while ( $loop_invitados_honor->have_posts() ) : $loop_invitados_honor->the_post();?>
						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" data-toggle="modal" data-target="#myModal<?php the_id() ?>" class="link_ponente_block" title="Ponente <?php the_title(); ?>">
								<div class="photo">
									<?php the_post_thumbnail(); ?>
									<div class="shadow">
										<img class="badge" src="<?php the_field('badge_evento'); ?>" alt="<?php the_title(); ?>">
										<img class="flag" src="<?php the_field('nacionalidad'); ?>" alt="<?php the_field('nacionalidad'); ?>">
									</div>
								</div>
								<div class="info"><div class="name"><?php the_title(); ?></div></div>
							</a>
							
							<div id="myModal<?php the_id() ?>" class="modal" role="dialog">
								<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php the_title() ?></h4>
									</div>
									<div class="modal-body">
										<?php the_content() ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php 
					$args = array( 'post_type' => 'ponente',
									'posts_per_page'	=> -1,
									'meta_query'	=> array(
											'relation'		=> 'AND',
											array(
												'key'		=> 'invitado_especial',
												'value'		=> true,
												'compare'	=> '!='
											),
											array(
												'key'		=> 'id_evento',
												'value'		=> $post->ID,
												'type'		=> 'NUMERIC',
												'compare'	=> '='
											)
										)
								);

					$loop_ponentes = new WP_Query( $args );

					if ($loop_ponentes->have_posts()) { ?>
						<h2>PONENTES</h2>
					<?php }
					while ( $loop_ponentes->have_posts() ) : $loop_ponentes->the_post();?>
						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" data-toggle="modal" data-target="#myModal<?php the_id() ?> " class="link_ponente_block" title="Ponente <?php the_title(); ?>">
								<div class="photo">
									<?php the_post_thumbnail(); ?>
									<div class="shadow">
										<img class="badge" src="<?php the_field('badge_evento'); ?>" alt="<?php the_title(); ?>">
										<img class="flag" src="<?php the_field('nacionalidad'); ?>" alt="<?php the_field('nacionalidad'); ?>">
									</div>
								</div>
								<div class="info"><div class="name"><?php the_title(); ?></div></div>
							</a>
							
							<div id="myModal<?php the_id() ?>" class="modal" role="dialog">
								<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php the_title() ?></h4>
									</div>
									<div class="modal-body">
										<?php the_content() ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<h2 class="text-center">
						<?php if (get_field('link')) { ?>
							<a target="_blank" class="btn btn-primary azul" style="width:auto" href="<?php the_field('link'); ?>">Regístrate aquí a <?php the_title() ?></a>
						<?php } else { ?>
							<a target="_blank" class="btn btn-primary azul" style="width:auto" href="/pre-registro?id=<?php the_ID(); ?>">Regístrate a <?php the_title() ?></a>
						<?php } ?>
					</h2>
				</div>


			</div>



			



			<div class="row">
				<?php the_field('texto_final') ?>
			</div>

			<div class="row text-center">
				<?php if (get_field('bases_concurso')) { ?>
					<a class="btn btn-primary azul_" target="_blank" style="width:auto" href="<?php the_field('bases_concurso'); ?>">Mayores informes haciendo clic aquí</a> <br><br>
				<?php } ?>
			</div>

			<div class="row text-center">
				<?php if (get_field('link_registro_carteles')) { ?>
					<a class="btn btn-primary azul" style="width:auto" target="_blank" href="<?php the_field('link_registro_carteles'); ?>">Regístrate aquí al concurso de carteles</a>
				<?php } ?>
			</div>
		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>