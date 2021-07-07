<?php
    include "config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        
		<!-- CSS -->
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="css/bulma.css">
		<link rel="stylesheet" href="css/bulma.min.css">
		<link rel="stylesheet" href="css/emoji.css">
		<link href="css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/helpers.css">
		<!-- <link rel="stylesheet" href="styles/debug.css"> -->
        
		<!-- JS -->
		<script src="js/simple-typing-carousel.js"></script> 
        
		<!-- Outros -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Manuel Simón Nóvoa</title>
	</head>
    
	<body>
		<!-- .hero -->
		<section class="hero is-fullheight">
            <div class="is-overlay has-text-right single-spaced desktop">
                <div class="control has-icons-left linguas">
                    <div class="select">
                        <select onchange="location = this.value;">
                            <option value="" selected><?php echo $lang['language-selection'] ?></option>
                            <option value="?lang=en">English</option>
                            <option value="?lang=es">Español</option>
                            <option value="?lang=fr">Français</option>
                            <option value="?lang=pt">Português (Galego AGAL)</option>
                        </select>
                    </div>
                    <span class="icon is-medium is-left">
					<i class="fas fa-language has-text-dark"></i>
					</span>
                </div>
            </div>
            
			<!-- .hero-head -->
			<nav class="hero-head">
				<div class="columns is-mobile is-marginless heading has-text-weight-bold">
					<!-- Nome -->
					<div class="column left desktop">
						<h1 class="title is-4 has-text-weight-light">Manuel Simón Nóvoa</h1>
					</div>
                    
					<!-- Navbar -->
                    <div class="column center oneline">

						<a href="#"><p class="navbar-item has-text-grey-light"><?php echo $lang['home'] ?></p></a>
						<a href="portefolio.php"><p class="navbar-item "><?php echo $lang['portfolio'] ?></p></a>
						<a href="cv.php"><p class="navbar-item "><?php echo $lang['cv'] ?></p></a>
						<a href="about.php"><p class="navbar-item "><?php echo $lang['about'] ?></p></a>
						<a href="creditos.php"><p class="navbar-item "><?php echo $lang['credits'] ?></p></a>
					</div>
                    
					<!-- RRSS -->
					<div class="column right desktop">
						<a href="https://www.linkedin.com/in/msimonnovoa/"><p class="navbar-item"><i class="fab fa-3x fa-linkedin has-text-link"></i></p></a>
					</div>
				</div>
			</nav>
			<!-- /.hero-head -->
            
			<!-- .hero-body -->
			<header class="hero-body center">
				<!-- Animação central -->
				<div class="center">
					<object style="max-height: 460px" id="my-svg" type="image/svg+xml" data=""></object>
				</div>
			</header>
            
			<!-- .hero-foot -->
			<footer class="hero-foot center" style="padding: 2rem;">
				<h1 class="title is-3 has-text-weight-light">
					<span
						class="txt-rotate"
						data-period="1500"
						data-rotate='[ "Olá, mundo!", "Hello, world!", "¡Hola, mundo!", "Bonjour, monde !" ]'>
					</span> 
					<i class="em em-male-technologist"></i>
				</h1>
			</footer>
		</section>
        
		<!-- Função JavaScript para trocar a animação central -->
		<script type="text/javascript">  
			var svgs = new Array(6);  
			svgs[0] = "images/faro.svg";
			svgs[1] = "images/gaita.svg";  
			svgs[2] = "images/portatil.svg";
			svgs[3] = "images/triskele.svg";
			svgs[4] = "images/vieira.svg";
			svgs[5] = "images/chuva.svg";
			
			var random = Math.floor(Math.random() * svgs.length);
			document.getElementById("my-svg").data = svgs[random];
		</script>  
	</body>
</html>