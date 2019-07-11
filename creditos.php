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

    <div class="is-overlay has-text-right single-spaced desktop">
        <div class="control has-icons-left linguas">
            <div class="select">
                <select onchange="location = this.value;">
                    <option value="" selected><?php echo $lang['language-selection'] ?></option>
                    <option value="?lang=en">English</option>
                    <option value="?lang=es">Español</option>
                    <option value="?lang=fr">Français</option>
                    <option value="?lang=pt">Português da Galiza (Galego)</option>
                </select>
            </div>
            <span class="icon is-medium is-left">
					<i class="fas fa-language has-text-dark"></i>
					</span>
        </div>
    </div>

        <!-- .hero -->
        <section class="hero is-fullheight">

            <!-- .hero-head -->
            <nav class="hero-head">
                <div class="columns is-mobile is-marginless heading has-text-weight-bold">
                    <!-- Nome -->
                    <div class="column left desktop">
                        <h1 class="title is-4 has-text-weight-light">Manuel Simón Nóvoa</h1>
                    </div>

                    <!-- Navbar -->
                    <div class="column center oneline">
                        <a href="index.php"><p class="navbar-item "><?php echo $lang['home'] ?></p></a>
                        <a href="portefolio.php"><p class="navbar-item "><?php echo $lang['portfolio'] ?></p></a>
                        <a href="cv.php"><p class="navbar-item "><?php echo $lang['cv'] ?></p></a>
                        <a href="about.php"><p class="navbar-item "><?php echo $lang['about'] ?></p></a>
                        <a href="#"><p class="navbar-item has-text-grey-light"><?php echo $lang['credits'] ?></p></a>
                    </div>

                    <!-- RRSS -->
                    <div class="column right desktop">
                        <a href="https://twitter.com/msnovoa"><p class="navbar-item"><i class="fab fa-3x fa-twitter has-text-info"></i></p></a>
                        <a href="https://www.linkedin.com/in/msimonnovoa/"><p class="navbar-item"><i class="fab fa-3x fa-linkedin has-text-link"></i></p></a>
                    </div>
                </div>
            </nav>
            <!-- /.hero-head -->

            <!-- .hero-body -->
            <header class="hero-body center">
                <div class="hero"> <!-- Corpo -->

                    <div class="container section">
                        <h3 class="title is-3"><?php echo $lang['credits-title'] ?></h3>
                        <br>
                        <p class="subtitle"><?php echo $lang['credits-description'] ?></p>

                        <li><a href="https://bulma.io/">Bulma</a></li>
                        <li><a href="https://github.com/Wikiki/bulma-timeline">Bulma extension: Timeline</a></li>
                        <li><a href="https://codepen.io/anon/pen/KRaqxG">Bulma extension: JS modal functionality</a></li>
                        <li><a href="https://codepen.io/gschier/pen/jkivt">Simple typing carousel</a></li>
                        <li><a href="https://maxwellito.github.io/vivus-instant/">Vivus Instant</a></li>
                        <li><a href="https://leafletjs.com/">Leaflet JS</a></li>
                        <li><a href="https://www.openstreetmap.org">Open Street Map</a></li>
                    </div>
                    <a class="has-text-centered" href="https://bulma.io">
                        <img src="https://bulma.io/images/made-with-bulma--semiblack.png" alt="Made with Bulma" width="256">
                    </a>
                </div>

            </header>
            <!-- /.hero-body -->

        </section>
        <!-- /.hero -->

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <?php echo $lang['footer-1'] ?>
                <?php echo $lang['footer-2'] ?>
                <?php echo $lang['footer-3'] ?>
            </p>
        </div>
    </footer>

        <script src="js/modal.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet-map.js"></script>

    </body>
</html>