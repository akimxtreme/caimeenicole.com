<!DOCTYPE HTML>

<html>
	<head>
		<title>Creaciones Aimee Nicole</title>
        <link rel="shortcut icon" href="images/icono.png" type="image"/>
		<meta name="viewport" content="width=1120,user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script>-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
        <script src="js/funciones.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<div id="wrapper">

			<div id="main">
				<div id="reel">
				<!-- ******************************************************************************************** -->
				<!-- ******************************************************************************************** -->
				

					<!-- Header Item -->
					
						<div id="header" class="item" data-width="400">
							<img src="images/logo.svg" alt="Creaciones Aimee Nicole" width="100%">
							<!--<p>Lazos y cintillos a la medida<br />
							a gusto del cliente</p>-->
						</div>
					
					<!-- Thumb Items -->

						<article class="item thumb" data-width="281">
							<h2>Delicado</h2>
							<a href="fotos/1.JPG"><img src="images/miniaturas/1.jpg" alt="" width="465" height="349"></a>
						</article>
						
						<article class="item thumb" data-width="384">
							<h2>Sutil</h2>
							<a href="fotos/2.JPG"><img src="images/miniaturas/2.jpg" alt="" width="464" height="255"></a>
						</article>
						
						<article class="item thumb" data-width="274">
							<h2>Fresco</h2>
							<a href="fotos/13.JPG"><img src="images/miniaturas/13.jpg" alt="" width="465" height="358"></a>
						</article>
						
						<article class="item thumb" data-width="282">
							<h2>Atrevido</h2>
							<a href="fotos/4.JPG"><img src="images/miniaturas/4.jpg" alt="" width="464" height="348"></a>
						</article>
						
						<article class="item thumb" data-width="476">
							<h2>Glamoroso</h2>
							<a href="fotos/5.JPG"><img src="images/miniaturas/5.jpg" alt="" width="464" height="205"></a>
						</article>
						
						<article class="item thumb" data-width="232">
						  <h2>Tierno</h2>
							<a href="fotos/10.JPG"> <img src="images/miniaturas/10.jpg" alt="" width="466" height="277"></a>
						</article>
						
						<article class="item thumb" data-width="352">
						  <h2>Alegre</h2>
							<a href="fotos/12.JPG"><img src="images/miniaturas/12.jpg" alt="" width="466" height="277"></a>
						</article>
						
						<article class="item thumb" data-width="348">
						  <h2>Innovador</h2>
							<a href="fotos/8.JPG"><img src="images/miniaturas/8.jpg" alt="" width="465" height="282"></a>
						</article>

					<!-- Filler Thumb Items (just for demonstration purposes) -->
						<article class="item thumb" data-width="476"><h2>Original</h2><a href="fotos/9.JPG"><img src="images/miniaturas/9.jpg" alt="" width="465" height="205"></a></article>
						<article class="item thumb" data-width="352"><h2>único</h2><a href="fotos/8.JPG"><img src="images/miniaturas/8.jpg" alt="" width="466" height="283"></a></article>
						<article class="item thumb" data-width="232"><h2>novedoso</h2><a href="fotos/6.JPG"><img src="images/miniaturas/6.jpg" alt="" width="466" height="424"></a></article>
						<article class="item thumb" data-width="348"><h2>atractivo</h2><a href="fotos/7.JPG"><img src="images/miniaturas/7.jpg" alt="" width="464" height="278"></a></article>
						<article class="item thumb" data-width="282"><h2>femenino</h2><a href="fotos/11.JPG"><img src="images/miniaturas/11.jpg" alt="" width="464" height="348"></a></article>
						<article class="item thumb" data-width="274"><h2>moderno</h2><a href="fotos/3.JPG"><img src="images/miniaturas/3.jpg" alt="" width="467" height="359"></a></article>
						<article class="item thumb" data-width="384"><h2>colorido</h2><a href="fotos/14.JPG"><img src="images/miniaturas/14.jpg" alt="" width="465" height="255"></a></article>
						<article class="item thumb" data-width="282"><h2>exclusivo</h2><a href="fotos/1.JPG"><img src="images/miniaturas/1.jpg" alt="" width="465" height="349"></a></article>


				<!-- ******************************************************************************************** -->
				<!-- ******************************************************************************************** -->
				</div>
			</div>
        <?php
 
 if(!empty($_POST['nombre']) AND !empty($_POST['email'])){
 
$to ="info@caimeenicole.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "From:".$_POST['nombre']."\r\n";           
$tema="Contacto desde el Sitio Web";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#CCCCCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#CCCCCC'><strong>Correo Electrónico:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#CCCCCC'><strong>Asunto</strong></td>
    <td width='80%' align='left'>Comentario</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#CCCCCC'><strong>Mensaje:</strong></td>
    <td align='left'>$_POST[comentario]</td>
  </tr>
</table>
";
mail($to,$tema,$mensaje,$headers);
  echo '<div id="mensaje">
        	<div>
        	<h3>Su Comentario se ha enviado exitosamente</h3>
            <button onclick="dontShowContacto();" type="button">Cerrar</button>
            </div>
        </div>';  
}

?>

		
		<div id="contact" >
        	<div>
            	<!-- Formulario de Contacto -->
            	<div class="formulario">
            		
                    <form action="index.php" method="post">
                    	<button onclick="dontShowContacto();" class="cerrar" type="button">X</button>
                    	
                    	<fieldset>
                        	<legend>Formulario de Contacto</legend>
                        	<label>Nombre:</label>
                            <input type="text" name="nombre" placeholder="Indique..." required maxlength="30">
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="Indique..." required maxlength="30">
                            <label>Mensaje:</label>
                            <textarea name="comentario" placeholder="Indique..." required></textarea>
                            <button type="submit">Enviar Mensaje</button>
                        </fieldset>
                    </form>
                    
            	</div>
                <div id="cerrar" class="cerrar_desktop"><button onclick="dontShowContacto();" class="cerrar" type="button">X</button></div>
                <!-- Dirección -->
            	<div class="ubicacion">
                
                <h2>Ubicación:</h2>
                <p>Caracas - Venezuela</p>
                <p>(0414)2849269</p>                
                <p><a href="#">info@caimeenicole.com</a></p>                
		
                </div>
            </div>
		<!--<iframe src="contacto.php" frameborder="0" onMouseOut="dontShowContacto();"></iframe>-->
        	
		</div>
		
			<div id="footer">
				<div class="left">
					<p>Lazos y cintillos hechos <strong>a la medida</strong> a gusto del cliente<br />
					Para las chiquitas de la casa</p>
				</div>
				<div class="right">
                    <h2>Contacto</h2>
					<ul class="contact">
						<li><a href="https://www.facebook.com/pages/Creaciones-Aimee-Nicole/600649196698836?fref=ts" class="fa fa-facebook solo"><span>Facebook</span></a></li>
						<li><a href="https://twitter.com/c_aimeenicole" class="fa fa-twitter solo"><span>Twitter</span></a></li>
                        <li><a href="http://instagram.com/creacionesaimeenicole" class="fa fa-instagram solo"><span>Instagram</span></a></li>
						<!-- <li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>-->
						<li onclick="showContacto();"><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>
					</ul>
					<div id="copyright">
						&copy; Creaciones Aimee Nicole / Creations Aimee Nicole 2014</a>
					</div>
				</div>
			</div>

		</div>

	</body>
</html>
