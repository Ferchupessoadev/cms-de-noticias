<?php
// Información de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noticias";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E.E.T.N°2 Independencia</title>
	<link rel="icon" href="./icon-school.png">
	<!-- Font Oswald -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Indic+Siyaq+Numbers&family=Noto+Sans+Math&family=Oswald:wght@500&display=swap" rel="stylesheet">
	<!-- Font Roboto slab -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Indic+Siyaq+Numbers&family=Noto+Sans+Math&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<!-- CSS Custom -->
	<link rel="stylesheet" href="./css/style.css">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/f845b9182b.js" crossorigin="anonymous"></script>
	<!-- libreria animate.css -->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  	/>
</head>
<body class="body">
	<!-- barra de navegación - escritorio -->
	<nav class="nav">
		<img style="width: 80px;height: 80px;" src="./icon-school.png" alt="">
		<ul class="nav__ul">
			<li class="nav__li"><a href="index.php" class="nav__li-a">Inicio</a></li>
			<li class="nav__li"><a href="./public/fp.html" class="nav__li-a">Formación profesional</a></li>
			<li class="nav__li nav__li-tecnicaturas">
				<a class="nav__li-a" href="#">Tecnicaturas <p class="arrow-rotate">&#60</p></a>
				<ul  class="events-ul">
					<li class="events-ul__li"><a class="events-ul__li-a" href="./public/tecnicaturas/computacion.html">Computación</a></li>
					<li class="events-ul__li"><a class="events-ul__li-a" href="./public/tecnicaturas/admDeEmpresas.html">Adm. de Empresas</a></li>
					<li class="events-ul__li"><a class="events-ul__li-a" href="./public/tecnicaturas/gastronomia.html">Gastronomía</a></li>
				</ul>
			</li>
			<li class="nav__li"><a href="#" class="nav__li-a">Contactanos</a></li>
		</ul>
	</nav>
	<!-- barra de navegación - telefono -->
		<nav class="nav-responsive">
			<h1 class="nav__h1-responsive">E.E.T.N°2 "Independencia"</h1>
			<div class="nav-responsive__nav-btn"><i class="fa-solid fa-bars"></i><i class="fa-solid fa-x btn-x-nav" style="font-family: monospace;"></i></div>
			<ul class="nav__ul-responsive" id="navResponsive">
				<li class="nav__li-responsive"><a href="index.html" class="nav__li-a-responsive">Inicio</a></li>
				<li class="nav__li-responsive"><a href="./public/fp.html" class="nav__li-a-responsive">Formación profesional</a></li>
				<li class="nav__li-responsive nav__li-tecnicaturas">
					<a class="nav__li-a-responsive" href="#">Tecnicaturas <p class="arrow-rotate">&#60</p></a>
				</li>
				<li class="nav__li-responsive"><a href="./public/incripcion.html" class="nav__li-a-responsive">Incripción 2023</a></li>
				<li class="nav__li-responsive"><a href="#" class="nav__li-a-responsive">Contactanos</a></li>
			</ul>
		</nav>
	<section class="section-school">
		<div class="container-text">
			<p>Bienvenidos</p>
			<h1>Técnica N°2 "Independencia"</h1>
			<a class="div-incribirse" href="./public/incripcion.html">
				<p class="incribirse__button">Incripción</p>
				<p>2023</p>
			</a>
		</div>
	</section>
	<a href="https://api.whatsapp.com/send?phone=3454321556" target="_blank">
		<div class="widget">
			<i class="fa-brands fa-whatsapp"></i>
		</div>
	</a>
	<!-- noticias -->
	<section class="section-news">
		<h5>Noticias</h5>
		<div class="container-flex">
			<?php
				$sql = 'SELECT title,description,imagen FROM news';
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// Recorrer los resultados
					while($row = $result->fetch_assoc()) {
						?>
						<div class="card">
							<img class="card__img-news" src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen'])?>" alt="">
							<p class="card__p-title card__p-news"><?php echo $row["title"]?></p>
							<p class="card__p-time card__p-news">mayo 17,2023</p>
							<p class="card__p-info card__p-news"><?php echo $row["description"] ?></p>
						</div>
						<?php
					}
				} 
			?>
			<!-- <div class="card">
				<img class="card__img-news" src="./img/slider/im-11.png" alt="">
				<p class="card__p-title card__p-news">Nuevo!! vicerector</p>
				<p class="card__p-time card__p-news">mayo 17,2023</p>
				<p class="card__p-info card__p-news">tenemos un nuevo vicerector se llama luis fonsi.</p>
			</div>
			<div class="card">
				<img class="card__img-news" src="./img/slider/im-11.png" alt="">
				<p class="card__p-title card__p-news">Nuevo logo</p>
				<p class="card__p-time card__p-news">septiembre 2,2023</p>
				<p class="card__p-info card__p-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio maiores illo obcaecati omnis unde? Laudantium!</p>
			</div>
			<div class="card">
				<img class="card__img-news" src="./img/slider/im-11.png" alt="">
				<p class="card__p-title card__p-news">Nuevo logo</p>
				<p class="card__p-time card__p-news">septiembre 2,2023</p>
				<p class="card__p-info card__p-news">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio maiores illo obcaecati omnis unde? Laudantium!</p>
			</div> -->
		</div>
		<a class="section-news__a-info" href="./public/news.html">+ Noticias</a>
	</section>
	<section class="section-basic-cycle">
		<div class="bg-color"></div>
			<h4 class="section-basic-cycle__h4">Ciclo Básico</h4>
			<div class="section-basic-cycle__div-age">
				<p class="section-basic-cycle__p-age">1°año</p>
				<p class="section-basic-cycle__p-age">2°año</p>
				<p class="section-basic-cycle__p-age">3°año</p>
			</div>
	</section>
	<section class="card-one">
		<h1 class="card__h1">Tecnicaturas</h1>
		<p class="card__p-subtitle">Ciclo superior 4°año en adelante</p>
		<div class="container-cards">			
			<div class="container-card">
				<div class="card">
					<img class="card__img" src="./img/tecnicaturas/adm-de-empresas.jpg" alt="">
					<h2 class="card__h2">Adm de Empresas</h2>
					<div class="container-info">
						<p class="card__p">El técnico en administración de empresas estara capacitado para  la gestión organizacional y comprender las actividades que hacen al desarrollo de tareas y toma de decisiones programadas, relacionadas con las operaciones de compra y venta, gestión de los recursos humanos, gestión de los fondos y el registro contable. Además, está capacitado para colaborar con algunas actividades relacionadas con la planificación y control... organizacional conforme se explicita en el perfil profesional.</p>
					</div>
					<a class="card__a" href="./public/tecnicaturas/admDeEmpresas.html">
						<button class="card__a-button">	
							<span class="button__span">+ Info</span>
						</button>
					</a>
				</div>
			</div>
			<div class="container-card">
				<div class="card">
					<img class="card__img" src="./img/tecnicaturas/computacion.jpg" alt="">
					<h2 class="card__h2">Computación</h2>
					<div class="container-info">
						<p class="card__p">El Técnico en Computación estará capacitado para asistir al usuario de productos y servicios informáticos brindándole servicios de instalación, capacitación, sistematización, mantenimiento primario, resolución de problemas derivados de la operatoria, y apoyo a la contratación de productos o servicios informáticos, desarrollando las actividades descriptas en su perfil profesional y pudiendo actuar de nexo entre el especialista...</p>
					</div>
					<a class="card__a" href="./public/tecnicaturas/computacion.html">
						<button class="card__a-button">	
							<span class="button__span">+ Info</span>
						</button>
					</a>
				</div>
			</div>
			<div class="container-card">
				<div class="card">
					<img class="card__img" src="./img/tecnicaturas/gastronomia.jpg" alt="">
					<h2 class="card__h2">Gastronomía</h2>
					<div class="container-info">
						<p class="card__p">El Técnico en Gastronomía está capacitado para desarrollar los procesos de pre elaboración, preparación y conservación de elaboraciones culinarias básicas y avanzadas, aplicando con autonomía las técnicas correspondientes, consiguiendo la calidad y estructuras de sabor de las principales gastronomías locales, regionales, nacionales e internacionales...</p>
					</div>
					<a class="card__a" href="./public/tecnicaturas/gastronomia.html">
						<button class="card__a-button">	
							<span class="button__span">+ Info</span>
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>

</footer>
	<script src="./js/main.js" type="module"></script>
</body>
</html>
<?php
// $sql = 'SELECT title,description,imagen FROM news';
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
// 	// Recorrer los resultados
// 	while($row = $result->fetch_assoc()) {
// 		echo "title: " . $row["title"]. "description:" . $row["description"]. "<br>";
// 		echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" alt="Imagen">';
// 	}
// } 
// Cerraramos la conexión a la base de datos
$conn->close();
?>