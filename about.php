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
                        <a href="#"><p class="navbar-item has-text-grey-light"><?php echo $lang['about'] ?></p></a>
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
                    <section class="section" id="titles"> <!-- Titles -->
                        <div class="section-heading">
                            <h3 class="title is-2 has-text-centered"><?php echo $lang['about-title'] ?></h3>
                            <h4 class="subtitle is-5 has-text-centered"><?php echo $lang['about-subtitle'] ?></h4>
                        </div>
                    </section>

                    <section class="section" id="photo"> <!-- Photo -->
                        <div class="columns is-centered">
                            <figure class="image is-350x350">
                                <img class="is-rounded" src="images/DSC00366.jpg">
                            </figure>
                        </div>
                    </section>

                    <section class="section" id="bio"> <!-- Bio -->
                        <div class="container">
                            <p><?php echo $lang['about-bio-1'] ?></p>

                            <p><?php echo $lang['about-bio-2'] ?></p>

                        </div>
                    </section>

                    <section class="section" id="things"> <!-- Things I do -->
                        <div class="columns has-same-height is-gapless">

                            <div class="column">
                                <!-- CV -->
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title is-4"><?php echo $lang['cv'] ?></h3>
                                        <div class="content">
                                            <p><?php echo $lang['about-cv-text-1'] ?></p>
                                            <p><?php echo $lang['about-cv-text-2'] ?></p>
                                            <div class="center">
                                                <a href="cv.php" class="button is-rounded is-medium"><?php echo $lang['cv'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <!-- Interesses -->
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title is-4"><?php echo $lang['about-interests-title'] ?></h3>
                                        <div class="content">
                                            <p><?php echo $lang['about-interests-text'] ?></p>
                                            <ul>
                                                <li><?php echo $lang['about-interests-list-1'] ?> <i class="fas fa-shield-alt"></i></li>
                                                <li><?php echo $lang['about-interests-list-2'] ?> <i class="fas fa-broadcast-tower"></i></li>
                                                <li><?php echo $lang['about-interests-list-3'] ?> <i class="fas fa-server"></i></li>
                                                <li><?php echo $lang['about-interests-list-4'] ?> <i class="fas fa-network-wired"></i></li>
                                                <li><?php echo $lang['about-interests-list-5'] ?> <i class="fas fa-database"></i></li>
                                                <li><?php echo $lang['about-interests-list-6'] ?> <i class="fas fa-box"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                                <!-- Portfolio -->
                                <div class="card">
                                    <div class="card-content">
                                        <h3 class="title is-4"><?php echo $lang['portfolio'] ?></h3>
                                        <div class="content">
                                            <p><?php echo $lang['about-portfolio-text-1'] ?></p>
                                            <p><?php echo $lang['about-portfolio-text-2'] ?></p>
                                            <div class="center">
                                                <a href="portefolio.php" class="button is-rounded is-medium"><?php echo $lang['portfolio'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>


                    <section class="section has-background-white-ter" id="rrss"> <!-- RRSS -->
                        <div class="container">
                            <h1 class="title is-4"><?php echo $lang['about-talk-title'] ?></h1>

                            <p><?php echo $lang['about-talk-text'] ?></p>

                            <h4 class="subtitle is-6 has-text-centered">
                                <a href="https://github.com/ManuelSimon"><i class="fab fa-3x fa-github has-text-dark"></i></a>
                                <a href="https://twitter.com/msnovoa"><i class="fab fa-3x fa-twitter has-text-info"></i></a>
                                <a href="https://www.linkedin.com/in/msimonnovoa/"><i class="fab fa-3x fa-linkedin has-text-link"></i></a>
                                <a href="mailto:eu@manuel.gal"><i class="fas fa-3x fa-at has-text-grey"></i></a>
                            </h4>
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