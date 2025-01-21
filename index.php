<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HardjSoft</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="js/arriba.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container-fluid menu">
            <a href="#page-top"><img src="img/logo.png">HardjSoft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            	Menu
	            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-width" viewBox="0 0 16 16">
	 				<path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
				</svg>	
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#quienessomos">Quienes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeria">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="home">
		<div class="col-md-12">
			<img src="img/img1.png" width="100%">			
		</div>
	</div>
	<div class="container text">
		<div class="col-md-12">
		<hr>	
			<p>Servicio técnico de pc´s y notebooks. Armado de CPU´s a medida, formato gamer o escritorio para trabajos de programación. Nuestra larga trayectoria a abarcado desde instalaciónes de sistemas operativos windows 98, windows XP, windows 7, y finalizando con la última actualización de Windows 10. Partición de unidad de disco para que en futuros mantenimientos no sea necesario buck up, o traspaso de información a unidades externas. Si el usuario asi lo requiere se deja funcional la opción de utilizar Sistema Operativo Windows 10 o Linux (Ubuntu o Debian) opciones en el momento del booteo del equipo. Servicio personalizado para que la experiencia del cliente sea de aprendizaje en el proceso de actualización y/o reparación del equipo.</p>
		</div>
		<hr>
	</div>
	<div id="quienessomos">
		<div class="container">
			<div class="col-md-12">
				<h1 class="center">Quienes Somos</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<video src="video/hjs7.mp4" controls autoplay muted loop width="100%"></video>
				</div>
				<div class="col-md-6">
					<p>Al servicio de usuarios de equipos de escritorio y configuración gamer, como así de Notebooks. Nos especializamos en actualización de equipos con Micros Intel  y Micros AMD. Confiamos en que el cliente tenga un aprendizaje de lo que es el mantenimiento básico del equipo, ofreciendole la oportunidad de un pequeño entrenamiento en lo que son fallas comunes como el tema de temperatura cuando el cooler y disipador de la CPU o Notebook tienen obstrucción producto de polvo acumulado por el tiempo de servicio del equipo (notandose mas este efecto en las Notebooks) lo que hace que en momentos el cooler (ventilador) trabaje en su maxima velocidad, haciendo en que el proceso que esta realizando el equipo se cuelgue. Asesoramiento a la hora de actualizar o añadir una placa de video o memoria RAM (DDR3, DDR4, DDR5)</p>
				</div>
			</div>
			<hr>
		</div>
	</div>
	<div id="galeria">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Galeria</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="img/1.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/2.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/3.png" width="100%">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="img/4.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/5.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/6.png" width="100%">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="img/7.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/8.png" width="100%">
				</div>
				<div class="col-md-4">
					<img src="img/9.png" width="100%">
				</div>
			</div>
			<hr>
		</div>
	</div>
	<div id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="contact_user_grupoamsi" class="form-contact" autocomplete="off" accept-charset="utf-8">
						<h3 class="title-form-contact">Por favor, utilice el siguiente formulario para contactarnos:</h3>
						<div class="ctn-inputs">
							<label for="contact_name_user_grupoamsi" class="support-text-form-contact">Nombre (Requerido al menos 2 caracteres)</label>
							<input type="text" name="contact_name_user_grupoamsi" id="contact_name_user_grupoamsi" pattern="[a-zA-Z]{2,100}" class=" effect-input" minlength="2" maxlength="100" autocomplete="off" required="required">
							<span class="bar-input-effect"><i class="fa fa-times clear-input-icon" aria-hidden="true"></i></span>
							<p id="field-names" class="error-input-form-contact"></p>
						</div>
						<div class="ctn-inputs">
							<label for="contact_email_user_grupoamsi" class="support-text-form-contact">Email (Requerido)</label>
							<input type="email" name="contact_email_user_grupoamsi" id="contact_email_user_grupoamsi" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class=" effect-input" minlength="6" maxlength="92" autocomplete="off" required="required">
							<span class="bar-input-effect">
								<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
							</span>
							<p id="field-email" class="error-input-form-contact"></p>
						</div>
						<div class="ctn-inputs ctn-middle">
							<label for="contact_tel_user_grupoamsi" class="support-text-form-contact">Teléfono (Opcional)</label>
							<input type="tel" name="contact_tel_user_grupoamsi" id="contact_tel_user_grupoamsi" pattern="[0-9]{7,11}" class="inline-block effect-input" min="2000000" max="3500000000" minlength="7" maxlength="11" autocomplete="off">
							<span class="bar-input-effect">
								<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
							</span>
							<p id="field-tel" class="error-input-form-contact"></p>
						</div>
						<div class="ctn-inputs ctn-middle">
							<label for="contact_ext_tel_user_grupoamsi" class="support-text-form-contact">Extensión (Opcional)</label>
							<input type="num" name="contact_ext_tel_user_grupoamsi" id="contact_ext_tel_user_grupoamsi" pattern="[0-9]{1,10}" class="inline-block effect-input" min="0" max="9999999999" minlength="1" maxlength="10" autocomplete="off">
							<span class="bar-input-effect">
								<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
							</span>
							<p id="field-ext" class="error-input-form-contact"></p>
						</div>
						<div class="ctn-inputs">
							<label for="contact_comments_user_grupoamsi" class="support-text-form-contact">Sus comentarios (Requerido)</label>
							<textarea name="contact_comments_user_grupoamsi" id="contact_comments_user_grupoamsi" pattern="[a-zA-Z0-9]{50,400}" class=" effect-input" minlength="50" maxlength="400" autocomplete="off" required="required"></textarea>
							<span class="bar-input-effect">
								<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
							</span>
							<p id="field-comments" class="error-input-form-contact"></p>
						</div>
						<div class="ctn-btns-form-contact">
							<input type="reset" id="clear_contact_user_grupoamsi" name="clear_contact_user_grupoamsi" class="btn-form-contact" value="Limpiar">
							<input type="submit" id="send_contact_user_grupoamsi" name="send_contact_user_grupoamsi" class="btn-form-contact" value="Enviar">
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-12 action">
				<div class="row">
					<div class="pie col-md-6">
						<ul>
							<li><a href="mailto:hardjsoft@hotmail.com" class="mail" target="_blanck"><i class="fa fa-at"></i></a></li>
							<li><a href="https://www.instagram.com/" class="instagram" target="_blanck"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://es-la.facebook.com/" class="facebook" target="_blanck"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/?lang=es" class="twiter" target="_blanck"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/job-joel-colque-25017b82" class="linkedin" target="_blanck"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="pie2 col-md-6">
						<div class="d-grid gap-2 col-6 mx-auto">
							<a href="https://wa.me/541122550060" class="btn btn-success" target="_blanck"><i class="fa fa-whatsapp">&nbsp; Directo</i></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 texto">
			<footer><p>Copyright © HardjSoft 2022 - Todos los derechos reservados</p></footer>
		</div>
	</div>
	<span class="ir-arriba icon-display"></span>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>