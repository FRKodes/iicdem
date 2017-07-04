<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				
				<div class="first-block">
					<div class="col-sm-4 col-left">
						<div class="hashtag">#FORMAMOS<span>EXPERTOS</span></div>
					</div>
					<div class="col-sm-4 col-center">
						<div class="logo"><img src="<?php echo get_template_directory_uri().'/assets/images/logo-iicdem.svg'; ?>" alt="Logo <?php bloginfo('name'); ?>"></div>
					</div>
					<div class="col-sm-4 col-right">
						<ul class="social">
							<li><a href="https://www.facebook.com/IICDEM" title="Ir al perfil de IICDEM en Facebook" target="_blank" class="icon-facebook"></a></li>
							<li><a href="https://twitter.com/IICDEM" title="Ir al perfil de IICDEM en Twitter" target="_blank" class="icon-twitter"></a></li>
							<li><a href="https://www.instagram.com/iicdem" title="Ir al perfil de IICDEM en Instagram" target="_blank" class="icon-instagram"></a></li>
							<li><a href="mailto:contacto@iicdem.com" title="Enviar un correo de contacto" class="icon-mail"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-sm-6 col-sm-offset-3 disclaimer azul">
					<p>&copy; IICDEM Todos los derechos reservados</p>
					<p>No está permitida la reproducción parcial o total de este sitio web, su tratamiento informático, la transmisión de ninguna forma o por cualquier medio, ya sea electrónico o mecánico u otros métodos sin el permiso previo y escrito de los titulares de los derechos de autor.</p>
					<p class="text-center">Desarrollado por <strong><a href="http://www.blueterrier.mx" target="_blank">Blue Terrier</a></strong></p>
				</div>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84802922-4', 'auto');
  ga('send', 'pageview');
</script>
<script src="/wp-content/themes/iicdem/assets/js/jquery.js"></script>
<script src="/wp-content/themes/iicdem/assets/js/bootstrap.js"></script>
<script src="/wp-content/themes/iicdem/assets/js/slick.js"></script>
<script src="/wp-content/themes/iicdem/assets/js/z-custom.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChauYCbUFFlNDoI25Xrwg6nIeQpIOjJZU&callback=initMap"></script>
</body>
</html>
