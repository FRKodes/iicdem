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
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="row">
			<div class="members-container">
				
				<div class="member-item">
					<div class="col-sm-6 photo">
						<h2 class="title azul mayus">MND Carlos A. Herrera Amante NCCAD</h2>
						<figure class="member-photo-container">
							<img class="member-photo" src="<?php echo get_template_directory_uri().'/assets/images/miembro-herrera_amante.jpg'; ?>" alt="MND Carlos A. Herrera Amante">
						</figure>
						<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
						<div class="position verde0 italic">Dirección de planeación y gestión académica</div>
						<a href="#" class="btn btn-primary review-link mayus">Ver reseña</a>
					</div>
					<div class="col-sm-6 info hidden-xs">
						<ul>
							<li>Licenciado en Nutrición.</li>
							<li>Maestro en Nutrición Deportiva por la Escuela de Estudios.</li>
							<li>Universitarios Real Madrid (UVM-UEM).</li>
							<li>Antropometrista (Instructor) Nivel 3 (ISAK).</li>
							<li>Nutriólogo deportivo de diversos atletas elite mexicanos.</li>
							<li>Profesor de Licenciaturas y Posgrados en Nutrición.</li>
							<li>Director de Planeación y Gestión Académica dentro del Instituto Iberoamericano de Ciencias del Deporte y el Movimiento Humano (IICDEM).</li>
							<li>Conferencista nacional e internacional.</li>
							<li>E-mail: <a class="azul" href="mailto:carlos.herrera@iicdem.com">carlos.herrera@iicdem.com</a> | Cel: (33) 3806 5730</li>
						</ul>
					</div>
				</div>
				
				<div class="member-item">
					<div class="col-sm-6 photo">
						<h2 class="title azul mayus">MND César Octavio Ramos García NC</h2>
						<figure class="member-photo-container">
							<img class="member-photo" src="<?php echo get_template_directory_uri().'/assets/images/miembro-ramos_garcia.jpg'; ?>" alt="MND César ramos garcia">
						</figure>
						<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
						<div class="position verde0 italic">Dirección de investigación y desarrollo científico</div>
						<a href="#" class="btn btn-primary review-link mayus">Ver reseña</a>
					</div>
					<div class="col-sm-6 info hidden-xs">
						<ul>
							<li>Licenciado en Nutrición. Universidad de Guadalajara.</li>
							<li>Master en Nutrición Deportiva. Universidad de Cádiz, España.</li>
							<li>Especialista en Nutrición Deportiva por el Comité Olímpico Internacional, COI.</li>
							<li>Doctorante en Ciencias de la Salud Pública. Universidad de Guadalajara.</li>
							<li>Antropometrista (Instructor) Nivel 3 (ISAK).</li>
							<li>Coordinador de la Licenciatura en Nutrición del Centro Universitario de Tonalá de la Universidad de Guadalajara.</li>
							<li>Director de Operación y Gestión Administrativa del Instituto Iberoamericano de Ciencias del Deporte y el Movimiento Humano (IICDEM).</li>
							<li>E-mail: <a href="mailto:cesar.ramos@iicdem.com">cesar.ramos@iicdem.com</a> | Cel: (33) 36673289</li>
						</ul>
					</div>
				</div>
				
				<div class="member-item">
					<div class="col-sm-6 photo">
						<h2 class="title azul mayus">MNC Luis Aaron Quiroga Morales NC</h2>
						<figure class="member-photo-container">
							<img class="member-photo" src="<?php echo get_template_directory_uri().'/assets/images/miembro-quiroga_morales.jpg'; ?>" alt="MND Luis Aaron Quiroga Morales NC">
						</figure>
						<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
						<div class="position verde0 italic">Dirección de Operación y Gestión Administrativa</div>
						<a href="#" class="btn btn-primary review-link mayus">Ver reseña</a>
					</div>
					<div class="col-sm-6 info hidden-xs">
						<ul>
							<li>Licenciado en Nutrición.</li>
							<li>Maestro en Nutrición Clínica.</li>
							<li>Doctor en Investigación Clínica.</li>
							<li>Profesor de licenciatura y Posgrados.</li>
							<li>Antropometrista (Instructor) Nivel 3 (ISAK).</li>
							<li>Presidente del Capítulo Jalisco 2015 – 2017 del Colegio Mexicano de Nutriólogos.</li>
							<li>Consultor Nutricional de diversos atletas olímpicos mexicanos (Deportes acuáticos, boxeo, atletismo y futbol).</li>
							<li>Conferencista en más de 30 congresos nacionales e internacionales.</li>
							<li>E-mail: <a href="mailto:luis.quiroga@iicdem.com">luis.quiroga@iicdem.com</a> | Cel: (33) 1245 3757</li>
						</ul>
					</div>
				</div>
				
				<div class="member-item">
					<div class="col-sm-6 photo">
						<h2 class="title azul mayus">Lic. Adrián Martinez Rubio</h2>
						<figure class="member-photo-container">
							<img class="member-photo" src="<?php echo get_template_directory_uri().'/assets/images/miembro-martinez_rubio.jpg'; ?>" alt="Lic. Adrián Martinez Rubio">
						</figure>
						<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
						<div class="position verde0 italic">Coordinador de Difusión y Mercadotecnia</div>
						<a href="#" class="btn btn-primary review-link mayus">Ver reseña</a>
					</div>
					<div class="col-sm-6 info hidden-xs">
						<ul>
							<li>Licenciado en nutrición.</li>
							<li>Profesor en Licenciaturas de Nutrición y Terapia Física.</li>
							<li>Antropometrista (Instructor) Nivel 3 (ISAK).</li>
							<li>Miembro “Nivel 2” de la Federación Mexicana de Nutrición Deportiva (FMND).</li>
							<li>Conferencista en temas de nutrición deportiva y antropometría.</li>
							<li>Consultor privado especializado en enfermedades crónico degenerativas y deportistas.</li>
							<li>E-mail: <a href="mailto:adrian.martinez@iicdem.com">adrian.martinez@iicdem.com</a> | Cel: (33) 13147613</li>
						</ul>
					</div>
				</div>
				
				<div class="member-item">
					<div class="col-sm-6 photo">
						<h2 class="title azul mayus">Mtro. Adrián Ramón Hernández García</h2>
						<figure class="member-photo-container">
							<img class="member-photo" src="<?php echo get_template_directory_uri().'/assets/images/miembro-hernandez_garcia.jpg'; ?>" alt="Mtro. Adrián Ramón Hernández García">
						</figure>
						<figure class="member-photo-shadow-container"><img class="member-photo-shadow" src="<?php echo get_template_directory_uri().'/assets/images/sombra.jpg'; ?>" alt="sombra"></figure>
						<div class="position verde0 italic">Coordinador de Logística y Recursos Humanos</div>
						<a href="#" class="btn btn-primary review-link mayus">Ver reseña</a>
					</div>
					<div class="col-sm-6 info hidden-xs">
						<ul>
							<li>Licenciado en Psicología</li>
							<li>Maestro en Gestión en servicios de la Salud.</li>
							<li>Profesor de licenciatura</li>
							<li>Asesor y Terapeuta en Procesos de Atención en Salud Mental, Desarrollo Deportivo y Procesos de Vida</li>
							<li>Gestor de eventos en desarrollo académico profesional</li>
							<li>Conferencista en temas de cuidados de la salud, deporte y ética en salud.</li>
							<li>E-mail: <a href="mailto:adrian.hernandez@iicdem.com">adrian.hernandez@iicdem.com</a> | Cel: (33) 39529603</li>
						</ul>
					</div>
				</div>
				
				
			</div>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
