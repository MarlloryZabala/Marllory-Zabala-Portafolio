<!DOCTYPE html>
<html lang="es">
    <head>
      	<meta charset="UTF-8">
       	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Portafolio de Marllory Zabala">
        <link href="./css/styles.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title>Marllory Zabala Correa </title>
		  
	</head>

	<body>

    	<!-- Encabezado y menú de navegación --> 
		
			<header>
			
			<h1>Marllory Zabala Correa </h1>
			<h4>Tecnóloga en análisis y desarrollo en sistemas de información </h4>
			

				<nav>

					<ul>
						<li><a href="#bienvenidos">Perfil</a></li>
						<li><a href="#bienvenidos_a">Resumen Profesional</a></li>
						<li><a href="#promociones">Información de Contacto</a></li>
						<li><a href="#servicios">Educación</a></li>
						<li><a href="#habitaciones">Experiencia Laboral</a></li>
						<li><a href="#galeria">Habilidades Tecnicas</a></li>
						<li><a href="#contacto">Contacto</a></li>
						

					</ul>

				</nav>

			</header>


        

    		<!-- Sección de Bienvenida -->
		<main>
     	   	<section id="bienvenidos">
					
				<h2>Perfil</h2>
				<div class="foto">
					<img src="./img/perfil.jpg" alt="css" width="200">
					
				</div>
				 <p>Tecnóloga en análisis y desarrollo en sistemas de información pasión por la programación y el aprendizaje continuo. 
					 Busco oportunidades para aplicar mis habilidades técnicas y contribuir al éxito de proyectos emocionantes mientras desarrollo mis capacidades profesionales.
				 </p>

    	   	</section>

			<section id="bienvenidos_a">
				<h2>Resumen Profesional</h2>
			
        		<p>Soy una persona responsable, comprometida y creativa Mi objetivo es utilizar mi experiencia y conocimientos estoy capacitado para enfrentar desafíos técnicos complejos y
					entregar productos de alta calidad. la programación es mi enfoque hacia el desarrollo web y el aprendizaje continuo. Poseo sólidos conocimientos en lenguajes como HTML,
					CSS, C# y JavaScript, así como experiencia en el desarrollo de aplicaciones web y desarrollo de aplicaciones utilizando tecnologías .NET . Mi enfoque se centra en la eficiencia del código.

				</p>
 
			</section>
			

   			

    		

			<section id="promociones">
					
				<h2>Información de Contacto</h2>
				 <p>📞 3206745908</p> 
				 <p>📧 marlloryzabala.07@gmail.com</p>  
				 <a href="https://github.com/MarlloryZabala" target="_blank"> <img src="./img/git.png"></a>  <a href="https://www.linkedin.com/in/marllory-zabala-correa-979865265?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"> <img src="./img/linkedin.png"></a>

				 

    	   	</section>
			<section id="servicios">

					<h2>Educación</h2>

						
					<ul>

					<li>2021 Bachiller Técnico en instalación de redes de computo
						<p> Institución Educativa Técnica Ciudad de Ibagué </p> <br>
					</li>


					<li>2023 Tecnólogo en análisis y desarrollo de sistemas de información
					<p> Servicio nacional de aprendizaje SENA</p> <br>
					</li>

					<li>2024 Ingenieria de sistemas
					<p> Universidad Nacional Abierta y a Distancia UNAD</p><br>
					</li>
					

							
					</ul>

			</section>



    		<!-- Sección de Habitaciones -->

   	  		<section id="habitaciones">
				 <h2>Experiencia Laboral</h2>

        				
				<ul>

					<li>Diseño de Bases de Datos: Capacidad para diseñar esquemas de bases de datos eficientes, incluyendo la identificación de entidades, relaciones y normalización. </li><br>


					<li> Optimización de Consultas: Habilidad para escribir consultas SQL eficientes y optimizar el rendimiento de las consultas mediante el uso de índices, claves primarias y secundarias, y otras técnicas de optimización. </li><br>

					<li>Modelado de Datos: Conocimiento en técnicas de modelado de datos para representar la estructura y relaciones de los datos de manera precisa, utilizando herramientas como diagramas entidad-relación (ER). </li><br>
							
				</ul>

				

         	</section>

     		

    		<!-- Sección de Galería -->

     		<section id="galeria">
            	<h2>Habilidades Tecnicas</h2>
				<p> Lenguajes de Programación. </p>
            	
           			  
				<div class="galerias">

					<div class="filas">

						<div class="cuadros">
						<img src="./img/html.jpg" alt="html" width="200">
							<p> HTML</p>
						</div>

						<div class="cuadros">
							<img src="./img/css.jpg" alt="css" width="200">
							<p>CSS</p>
						</div>
									
					</div>

					<div class="filas">

						<div class="cuadros">
						<img src="./img/javascript.jpg" alt="javascript" width="200">
						<p>JavaScript</p>
						</div>

						<div class="cuadros">
							<img src="./img/php.jpg" alt="php" width="200">
							<p>PHP.</p>
						</div>
									
					</div>
				
								
				</div>

       	    </section>
				
        </main>

 		<!-- Sección de Contacto -->

    	<section id="contacto" class="contact_container"> 
       		<div class="form-container">
        		<h2>Contáctanos</h2>
        		<form action="./controlador/contactenos/contactenos.php" method="post">
            		<input type="text" name="nombre" placeholder="Nombre completo" required>
            		<input type="email" name="email" placeholder="Correo electrónico" required>
            		<textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
            		<button type="submit">Enviar</button>
        		</form>
    		</div>

				
        </section>

	 
	


        <!-- Pie de página -->

    	<footer>
            <p>&copy; 2024 Marllory Zabala Correa. </p>
            
        </footer>

		<script src="./js/script.js"></script>

	</body>

</html>