<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="normalize.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manuel Simón Nóvoa</title>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/emoji.css">
    <link href="css/all.css" rel="stylesheet">
    <script src="js/simple-typing-carousel.js"></script>
    <!-- <link rel="stylesheet" href="styles/debug.css"> -->
    <link rel="stylesheet" href="styles/helpers.css">
    <link rel="stylesheet" href="styles/grid.css">
</head>

<body>
<div class="is-overlay has-text-centered single-spaced is-centered">
    <h1 id="404" class="has-text-grey-lighter has-text-weight-bold" style="font-size: 85vh;">404</h1>
</div>

<!-- .hero -->
<section class="hero is-fullheight">

    <!-- .hero-body -->
    <header class="hero-body center">
        <div style="position: absolute;">
            <section class="section">
                <div class="section-heading">
                    <h1 class="title is-2 has-text-centered"><?php echo $lang['404-title'] ?> <i class="em em-zany_face"></i></h1>
                    <h2 class="subtitle is-3 has-text-centered"><?php echo $lang['404-subtitle'] ?></h2>


                </div>
            </section>

            <section class="section">
                <div class="has-text-centered">
                    <a href="index.php" class="button is-dark is-outlined is-large title">
                        <?php echo $lang['404-button'] ?>
                    </a>
                </div>
            </section>

            <section class="section">
                <h3 class="subtitle is-6 has-text-centered"><?php echo $lang['404-extra'] ?></h3>
            </section>

        </div>

    </header>
    <!-- /.hero-body -->

</section>
<!-- /.hero -->


</body>
</html>