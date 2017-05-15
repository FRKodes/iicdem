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

					<?php if (get_field('ponente_1')) { ?>
						<h2>INVITADO DE HONOR</h2>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_invitado_especial') ?>">
								<div class="photo"><img src="<?php the_field('foto_invitado_especial') ?>" alt="foto <?php the_field('ponente_invitado_especial') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_invitado_especial') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_1')) { ?>
						<h2>PONENTES</h2>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_1') ?>">
								<div class="photo"><img src="<?php the_field('foto_1') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_1') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_2')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_2') ?>">
								<div class="photo"><img src="<?php the_field('foto_2') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_2') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_3')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_3') ?>">
								<div class="photo"><img src="<?php the_field('foto_3') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_3') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_4')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_4') ?>">
								<div class="photo"><img src="<?php the_field('foto_4') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_4') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_5')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_5') ?>">
								<div class="photo"><img src="<?php the_field('foto_5') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_5') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_6')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_6') ?>">
								<div class="photo"><img src="<?php the_field('foto_6') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_6') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_7')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_7') ?>">
								<div class="photo"><img src="<?php the_field('foto_7') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_7') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_8')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_8') ?>">
								<div class="photo"><img src="<?php the_field('foto_8') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_8') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_9')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_9') ?>">
								<div class="photo"><img src="<?php the_field('foto_9') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_9') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_10')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_10') ?>">
								<div class="photo"><img src="<?php the_field('foto_10') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_10') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<?php if (get_field('ponente_11')) { ?>

						<div class="col-xs-6 col-sm-3 ponente-item">
							<a href="#" class="link_ponente_block" title="Ponente <?php the_field('ponente_11') ?>">
								<div class="photo"><img src="<?php the_field('foto_11') ?>" alt="foto <?php the_field('ponente_1') ?>"></div>
								<div class="info"><div class="name"><?php the_field('ponente_11') ?></div></div>
							</a>
						</div>
					<?php } ?>

					<h2 class="text-center">
						<?php if (get_field('link')) { ?>
							<a class="btn btn-primary azul" style="width:auto" href="<?php the_field('link'); ?>">Regístrate aquí</a>
						<?php } else { ?>
							<a class="btn btn-primary azul" style="width:auto" href="/pre-registro?id=<?php the_ID(); ?>">Regístrate aquí</a>
						<?php } ?>
						
					</h2>

				</div>
			</div>
		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>