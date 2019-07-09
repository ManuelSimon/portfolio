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
        <link rel="stylesheet" href="css/bulma-timeline.min.css">

        <!-- JS -->
        <script src="js/simple-typing-carousel.js"></script> 

        <!-- Outros -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manuel Simón Nóvoa</title>

        <!-- include leaflet css and javascript -->
        <link rel="stylesheet" crossorigin=""
              href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"
                crossorigin=""></script>

        <!-- include our own css -->
        <link rel="stylesheet" href="css/leaflet-map.css" />

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

        <!-- TARJETAS POP-UP MODALS -->

        <div class="modal" id="modalCESGA">
            <div onclick="refs.close('modalCESGA')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column is-three-fifths" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-cesga0-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-cesga1-company'] ?></h2>

                                    <h3 class="subtitle is-size-4"><?php echo $lang['cv-timeline-cesga1-title'] ?></h3>
                                    <p><?php echo $lang['cv-timeline-cesga1-description-1'] ?></p>

                                    <li><?php echo $lang['cv-timeline-cesga1-description-1-list-1'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-1-list-2'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-1-list-3'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-1-list-4'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-1-list-5'] ?></li>
                                    <p></p>
                                    <h3 class="subtitle is-size-4"><?php echo $lang['cv-timeline-cesga2-title'] ?></h3>

                                    <p><?php echo $lang['cv-timeline-cesga2-description-1'] ?></p>

                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-1'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-2'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-3'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-4'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-5'] ?></li>
                                    <li><?php echo $lang['cv-timeline-cesga1-description-2-list-6'] ?></li>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/ft2.jpg')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalCESGA')"></button>
        </div>

        <div class="modal" id="modalXperience">
            <div onclick="refs.close('modalXperience')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-summerXperience-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-summerXperience-company'] ?></h2>
                                    <p><?php echo $lang['cv-timeline-summerXperience-description-1'] ?></p>
                                    <p><?php echo $lang['cv-timeline-summerXperience-description-2'] ?></p>
                                    <li><?php echo $lang['cv-timeline-summerXperience-description-list-1'] ?></li>
                                    <li><?php echo $lang['cv-timeline-summerXperience-description-list-2'] ?></li>
                                    <li><?php echo $lang['cv-timeline-summerXperience-description-list-3'] ?></li>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/xperience.jpg')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalXperience')"></button>
        </div>

        <div class="modal" id="modalLero">
            <div onclick="refs.close('modalLero')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-lero-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-lero-company'] ?></h2>
                                    <p><?php echo $lang['cv-timeline-lero-description-1'] ?></p>
                                    <p><?php echo $lang['cv-timeline-lero-description-2'] ?></p>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/lero.JPG')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalLero')"></button>
        </div>

        <div class="modal" id="modalAKKAdemy">
            <div onclick="refs.close('modalAKKAdemy')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-akkademy-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-akkademy-company'] ?></h2>
                                    <p><?php echo $lang['cv-timeline-akkademy-description-1'] ?></p>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/theakkademy.jpg')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalAKKAdemy')"></button>
        </div>

        <div class="modal" id="modalTitor">
            <div onclick="refs.close('modalTitor')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-titor-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-titor-company'] ?></h2>
                                    <p><?php echo $lang['cv-timeline-titor-description-1'] ?></p>
                                    <p><?php echo $lang['cv-timeline-titor-description-2'] ?></p>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/etse.jpg')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalTitor')"></button>
        </div>

        <div class="modal" id="modalGDG">
            <div onclick="refs.close('modalGDG')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-gdg-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-gdg-company'] ?></h2>
                                    <h3 class="subtitle is-size-4"><?php echo $lang['cv-timeline-gdg-description-1'] ?></h3>
                                    <p><?php echo $lang['cv-timeline-gdg-description-2'] ?></p>

                                    <h3 class="subtitle is-size-4"><?php echo $lang['cv-timeline-gdg-description-3'] ?></h3>
                                    <p><?php echo $lang['cv-timeline-gdg-description-4'] ?></p>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/gdg.jpg')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalGDG')"></button>
        </div>

        <div class="modal" id="modalExplorer">
            <div onclick="refs.close('modalExplorer')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-explorer-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-explorer-company'] ?></h2>

                                    <p><?php echo $lang['cv-timeline-explorer-description-1'] ?></p>

                                    <li><?php echo $lang['cv-timeline-explorer-description-list-1'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-2'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-3'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-4'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-5'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-6'] ?></li>
                                    <li><?php echo $lang['cv-timeline-explorer-description-list-7'] ?></li>

                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/exp1.PNG')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalExplorer')"></button>
        </div>

        <div class="modal" id="modalAKKA">
            <div onclick="refs.close('modalAKKA')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-akka-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-akka-company'] ?></h2>

                                    <p><?php echo $lang['cv-timeline-akka-description-1'] ?></p>
                                    <p><?php echo $lang['cv-timeline-akka-description-2'] ?></p>
                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/akkagr.png')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalAKKA')"></button>
        </div>

        <div class="modal" id="modalNokia">
            <div onclick="refs.close('modalNokia')" class="modal-background"></div>
            <div class="modal-content" style="width: 85%">
                <section class="hero has-background-white-bis is-fullheight-with-navbar">
                    <div class="hero-body">
                        <div class="container is-fluid">

                            <div class="columns">
                                <div class="column" id="bio">
                                    <h1 class="title is-size-1"><?php echo $lang['cv-timeline-nokia-title'] ?></h1>
                                    <h2 class="subtitle is-size-4"><?php echo $lang['cv-timeline-nokia-company'] ?></h2>

                                    <p><?php echo $lang['cv-timeline-nokia-description-1'] ?></p>

                                    <p><?php echo $lang['cv-timeline-nokia-description-2'] ?></p>

                                </div>
                                <div class="column is-fullheight imagem" style="background-image: url('images/nsp.png')">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="refs.close('modalNokia')"></button>
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
                    <div class="column center">
                        <a href="index.php"><p class="navbar-item "><?php echo $lang['home'] ?></p></a>
                        <a href="portefolio.php"><p class="navbar-item "><?php echo $lang['portfolio'] ?></p></a>
                        <a href="#"><p class="navbar-item has-text-grey-light"><?php echo $lang['cv'] ?></p></a>
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
                <div class="hero"> <!-- Corpo -->

                    <div class="container section">
                        <h3 class="title is-3 has-text-centered"><?php echo $lang['cv-title'] ?></h3>
                        <br>
                        <p class="subtitle"><?php echo $lang['cv-subtitle'] ?></p>
                        <br>


                        <div class="columns">
                            <div class="column"><a class="yei" href="#mapa">
                                <h3 class="title is-4 has-text-centered"><?php echo $lang['cv-map'] ?> <i class="fas fa-map-marked-alt"></i></h3>
                                <p><?php echo $lang['cv-map-text'] ?></p>
                                </a></div>
                            <div class="column"><a class="yei" href="#cronologia">
                                <h3 class="title is-4 has-text-centered"><?php echo $lang['cv-chronology'] ?> <i class="fas fa-history"></i></h3>
                                <p><?php echo $lang['cv-chronology-text'] ?></p>
                                </a></div>
                        </div>
                    </div>
                    <hr>


                    <section> <!-- Map -->
                        <div class="hero-body">
                            <div class="container" id="mapa">
                                <h3 class="title is-2 has-text-centered"><?php echo $lang['cv-map'] ?> <i class="fas fa-map-marked-alt"></i></h3>
                                <div id="map" class="map" style="z-index: 1"></div>
                            </div>
                        </div>
                    </section>

                    <hr>

                    <section class="section" id="cronologia"> <!-- Timeline -->
                        <div class="section-heading">
                            <h3 class="title is-2 has-text-centered"><?php echo $lang['cv-chronology'] ?> <i class="fas fa-history"></i></h3>
                        </div>
                    </section>

                    <section> 
                        <div class="timeline is-centered">
                            <header class="timeline-header">
                                <span class="tag is-large is-link"><?php echo $lang['cv-timeline-title'] ?></span>
                            </header>

                            <div class="timeline-item is-link" id="nokia">
                                <div class="timeline-marker is-image is-48x48 is-link">
                                    <img src="images/nokia.png">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalNokia')">
                                        <p class="heading"><?php echo $lang['cv-timeline-nokia-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-nokia-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-nokia-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-nokia-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item is-link" id="akka">
                                <div class="timeline-marker is-link is-image is-48x48">
                                    <img src="images/akka.png">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalAKKA')">
                                        <p class="heading"><?php echo $lang['cv-timeline-akka-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-akka-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-akka-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-akka-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item" id="akkademy">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/akkademy.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalAKKAdemy')">
                                        <p class="heading"><?php echo $lang['cv-timeline-akkademy-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-akkademy-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-akkademy-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-akkademy-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <header class="timeline-header">
                                <span class="tag is-medium">2019</span>
                            </header>

                            <div class="timeline-item" id="lero">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/lero.png">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalLero')">
                                        <p class="heading"><?php echo $lang['cv-timeline-lero-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-lero-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-lero-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-lero-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item has-text-grey">
                                <div class="timeline-marker is-primary is-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>

                                <div class="timeline-content">
                                    <p class="heading"><?php echo $lang['cv-timeline-grei-end'] ?></p>
                                    <p><?php echo $lang['cv-timeline-grei-title'] ?></p>
                                    <p class="is-size-7"><?php echo $lang['cv-timeline-grei-company'] ?></p>
                                    <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-grei-place'] ?></p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/cesga.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalCESGA')">
                                        <p class="heading"><?php echo $lang['cv-timeline-cesga2-end'] ?></p>
                                        <p><?php echo $lang['cv-timeline-cesga2-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-cesga1-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-cesga1-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item has-text-grey">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/explorer.png">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalExplorer')">
                                        <p class="heading"><?php echo $lang['cv-timeline-explorer-end'] ?></p>
                                        <p><?php echo $lang['cv-timeline-explorer-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-explorer-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-explorer-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/cesga.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalCESGA')">
                                        <p class="heading"><?php echo $lang['cv-timeline-cesga2-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-cesga2-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-cesga1-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-cesga1-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item is-link has-text-grey-dark" id="gdg">
                                <div class="timeline-marker is-image is-48x48 is-link">
                                    <img src="images/gdgSantiago.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalGDG')">
                                        <p class="heading"><?php echo $lang['cv-timeline-gdg-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-gdg-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-gdg-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-gdg-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item has-text-grey" id="explorer">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/explorer.png">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalExplorer')">
                                        <p class="heading"><?php echo $lang['cv-timeline-explorer-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-explorer-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-explorer-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-explorer-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <header class="timeline-header">
                                <span class="tag is-medium">2018</span>
                            </header>

                            <div class="timeline-item">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/cesga.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalCESGA')">
                                        <p class="heading"><?php echo $lang['cv-timeline-cesga1-end'] ?></p>
                                        <p><?php echo $lang['cv-timeline-cesga1-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-cesga1-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-cesga1-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item" id="xperience">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/deloitte.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalXperience')">
                                        <p class="heading"><?php echo $lang['cv-timeline-summerXperience-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-summerXperience-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-summerXperience-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-summerXperience-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item has-text-grey-dark">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/usc.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalTitor')">
                                        <p class="heading"><?php echo $lang['cv-timeline-titor-end'] ?></p>
                                        <p><?php echo $lang['cv-timeline-titor-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-titor-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-titor-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="timeline-item" id="cesga">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/cesga.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalCESGA')">
                                        <p class="heading"><?php echo $lang['cv-timeline-cesga1-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-cesga1-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-cesga1-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-cesga1-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <header class="timeline-header">
                                <span class="tag is-medium">2017</span>
                            </header>

                            <div class="timeline-item has-text-grey-dark" id="titor">
                                <div class="timeline-marker is-image is-48x48">
                                    <img src="images/usc.jpg">
                                </div>
                                <a class="ye">
                                    <div class="timeline-content" onclick="refs.open('modalTitor')">
                                        <p class="heading"><?php echo $lang['cv-timeline-titor-start'] ?></p>
                                        <p><?php echo $lang['cv-timeline-titor-title'] ?></p>
                                        <p class="is-size-7"><?php echo $lang['cv-timeline-titor-company'] ?></p>
                                        <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-titor-place'] ?></p>
                                    </div>
                                </a>
                            </div>

                            <header class="timeline-header">
                                <span class="tag is-medium">2016</span>
                            </header>

                            <div class="timeline-item has-text-grey">
                                <div class="timeline-marker is-primary is-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-content">
                                    <p class="heading"><?php echo $lang['cv-timeline-grei-start'] ?></p>
                                    <p><?php echo $lang['cv-timeline-grei-title'] ?></p>
                                    <p class="is-size-7"><?php echo $lang['cv-timeline-grei-company'] ?></p>
                                    <p class="is-size-7 has-text-weight-light"><?php echo $lang['cv-timeline-grei-place'] ?></p>
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

        <script src="js/modal.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet-map.js"></script>

    </body>
</html>