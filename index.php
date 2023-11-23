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
	<link rel="stylesheet" href="./sass/style.css">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/f845b9182b.js" crossorigin="anonymous"></script>
	<!-- libreria animate.css -->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  	/>
</head>
<body class="body">
	<?php require 'partials/header.php' ?>
	<section class="section-school">
		<div class="container-text">
			<p>Bienvenidos</p>
			<h1>Técnica N°2 "Independencia"</h1>
			<a class="div-incribirse" id="inscripcion" href="./public/incripcion.html">
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
	<a href="./admin-news/login.html">Acceso Admin</a>
</footer>
	<script src="./js/main.js" type="module"></script>
</body>
</html>
<?php
$conn->close();
?>