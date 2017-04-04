<?php $postId = $_GET['id']; ?>
<?php if ($postId) { ?>
		<div class="single-featured-image-header">
			<?php echo get_the_post_thumbnail( $postId, 'original' );?>
		</div>
<?php } ?>

<h1 class="text-center">Pre-registro 
	<?php if ($postId) {
		echo get_the_title( $postId);
	} ?>
</h1>

<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
	<form action="/sendmail-pre-registro.php" id="preregistro" method="POST">
		
		<div class="form-group">
			<label for="modalidad">Modalidad en la cual desea inscribirse <span class="rojo">*</span></label>
			<select name="modalidad" id="modalidad" class="form-control" data-validate="required">
				<option value="">Selecciona una opción</option>
				<option value="presencial">Presencial</option>
				<option value="online">A distancia (Plataforma G-SE)</option>
			</select>
		</div>
		
		<input type="hidden" name="curso" value="<?php echo get_the_title( $postId); ?>">
		
		<div class="form-group">
			<label for="nombre">Nombre completo <span class="rojo">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre completo, como aparecerá en tu certificado" data-validate="required">
		</div>
		<div class="form-group">
			<label for="genero">Género<span class="rojo">*</span></label>
			<select name="genero" id="genero" class="form-control" data-validate="required">
				<option value="">Selecciona una opción</option>
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="fnacimiento">Fecha de nacimiento <span class="rojo">*</span></label>
			<input type="text" name="fnacimiento" class="form-control" placeholder="dd/mm/aaaa" data-validate="required">
		</div>
		<div class="form-group">
			<label for="direccion">Dirección <span class="rojo">*</span></label>
			<input type="text" name="direccion" class="form-control" placeholder="Calle, número exterior e interior, colonia, código postal, ciudad y estado" data-validate="required">
		</div>
		<div class="form-group">
			<label for="lnacimiento">Lugar de nacimiento</label>
			<input type="text" name="lnacimiento" class="form-control" placeholder="¿Dónde naciste?">
		</div>
		<div class="form-group">
			<label for="email">Correo electrónico <span class="rojo">*</span></label>
			<input type="text" name="email" class="form-control" placeholder="Por este medio estaremos en contacto con usted" data-validate="required|email">
		</div>
		<div class="form-group">
			<label for="telefono">Teléfono <span class="rojo">*</span></label>
			<input type="text" name="telefono" class="form-control" placeholder="Incluye lada" data-validate="required">
		</div>
		<div class="form-group">
			<label for="institucion">Institución de procedencia</label>
			<input type="text" name="institucion" class="form-control" placeholder="Escriba su adscripción o institución de la cual procede">
		</div>
		<div class="form-group">
			<label for="nivel_estudios">Último nivel de estudios <span class="rojo">*</span></label>
			<select name="nivel_estudios" id="nivel_estudios" class="form-control" data-validate="required">
				<option value="">Selecciona una opción</option>
				<option value="1 a 3 semestre de licenciatura">1 a 3 semestre de licenciatura</option>
				<option value="4 a 8 semestre de licenciatura">4 a 8 semestre de licenciatura</option>
				<option value="Licenciatura terminada">Licenciatura terminada</option>
				<option value="Maestrante">Maestrante</option>
				<option value="Maestría">Maestría</option>
				<option value="Doctorante">Doctorante</option>
				<option value="Doctorado">Doctorado</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cv">Breve resumen curicular <span class="rojo">*</span></label>
			<textarea name="cv" id="cv" cols="30" class="form-control" rows="10" placeholder="Describa brevemente su trayectoria académica" data-validate="required"></textarea>
		</div>
		<div class="form-group">
			<label for="">¿Cuáles son los motivos por los cuales desea realizar la certificación ABF? <span class="rojo">*</span></label>
			<textarea name="motivos" id="motivos" cols="30" class="form-control" rows="10" data-validate="required"></textarea>
		</div>
		<div class="form-group">
			<label for="medio_info">Medio por el cual se enteró de este curso <span class="rojo">*</span></label>
			<input type="radio" value="Correo Electrónico" name="medio_info" checked >Correo electrónico</label> <br>
			<input type="radio" value="Twitter" name="medio_info" >Twitter</label><br>
			<input type="radio" value="Facebook" name="medio_info" >Facebook IICDEM</label><br>
			<input type="radio" value="Otro" name="medio_info" >Otro</label>
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary azul" value="Hacer Pre Registro">
		</div>
		<div class="email-sent-alert pre-registro"><strong>Gracias por tu pre-registro</strong><br>Nos pondremos en contacto contigo a la brevedad.</div>
	</form>
</div>