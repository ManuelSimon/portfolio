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
                    <option value="?lang=pt">Português (Galego AGAL)</option>
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
                        <a href="#"><p class="navbar-item has-text-grey-light"><?php echo $lang['portfolio'] ?></p></a>
                        <a href="cv.php"><p class="navbar-item "><?php echo $lang['cv'] ?></p></a>
                        <a href="about.php"><p class="navbar-item "><?php echo $lang['about'] ?></p></a>
                        <a href="creditos.php"><p class="navbar-item "><?php echo $lang['credits'] ?></p></a>
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
                <div> <!-- Corpo -->

                    <h3 class="title is-3 has-text-centered"><?php echo $lang['projects-title'] ?> <i class="em em-man-bowing"></i></h3>

                    <section class="section" id="things"> <!-- Things I do -->
                        <div class="columns">

                            <div class="column">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            <?php echo $lang['projects-portfolio-title'] ?>
                                        </p>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <p><?php echo $lang['projects-portfolio-description-1'] ?></p>
                                            <p><?php echo $lang['projects-portfolio-description-2'] ?></p>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="https://github.com/ManuelSimon/portfolio" class="iconas card-footer-item"><i class="fab fa-2x fa-github"></i></a>
                                        <p class="iconas card-footer-item"> <i class="fas fa-file-code"></i> <i class="fab fa-css3-alt"></i> <i class="fab fa-js"></i> <i class="fab fa-php"></i> <i class="fas fa-pencil-ruler"></i> <i class="fas fa-language"></i> <i class="fas fa-map-marked-alt"></i> </p>
                                    </footer>
                                </div>
                            </div>

                            <div class="column">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            <?php echo $lang['projects-ariseco-title'] ?>
                                        </p>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <p><?php echo $lang['projects-ariseco-description'] ?></p>
                                            <p><?php echo $lang['projects-ariseco-description-2'] ?></p>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="https://github.com/ManuelSimon/ARiSeCo" class="iconas card-footer-item"><i class="fab fa-2x fa-github"></i></a>
                                        <p class="iconas card-footer-item"> <i class="fas fa-shield-alt"></i>  <i class="fas fa-box"></i> <i class="fab fa-docker"></i> <i class="fas fa-network-wired"></i> <i class="fas fa-terminal"></i> <i class="fas fa-server"></i>  <i class="fas fa-book"></i></p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        
                        <div class="columns">
                            
                            <div class="column">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            <?php echo $lang['projects-paper-title'] ?>
                                        </p>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <p><?php echo $lang['projects-paper-description'] ?></p>
                                            <p><?php echo $lang['projects-paper-description-2'] ?></p>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="https://conferences.computer.org/sc19w/2019/#!/toc/0" class="iconas card-footer-item"><i class="fas fa-2x fa-external-link-alt"></i></a>
                                        <a href="docs/paperNovoa.pdf" class="iconas card-footer-item"><i class="fas fa-2x fa-file-download"></i></a>
                                        <p class="iconas card-footer-item"> <i class="fas fa-box"></i> <i class="fab fa-docker"></i> <i class="fas fa-network-wired"></i> <i class="fas fa-terminal"></i> <i class="fas fa-server"></i>  <i class="fas fa-book"></i></p>
                                    </footer>
                                </div>
                            </div>
                            
                            <div class="column">
                                <div class="card">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                            <?php echo $lang['projects-IDwebapp-title'] ?>
                                        </p>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <p><?php echo $lang['projects-IDwebapp-description'] ?></p>
                                            <p><?php echo $lang['projects-IDwebapp-description-2'] ?></p>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <a href="https://github.com/ManuelSimon/IDwebapp" class="iconas card-footer-item"><i class="fab fa-2x fa-github"></i></a>
                                        <p class="iconas card-footer-item"> <i class="fas fa-file-code"></i> <i class="fab fa-java"></i> <i class="fas fa-shield-alt"></i>  </p>
                                    </footer>
                                </div>
                            </div>
                            
                        </div>
                        
                    </section>
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

    </body>
</html>