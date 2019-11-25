<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="Retrouvez mon site CV. Technologies utilisées : HTML/SCSS, PHP/mySQL, JavaScript/Jquery" />

        <link rel="icon" type="image/png" href="assets/images/book_fav.png" />
        <link rel="stylesheet" href="assets/scss/general.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min-grid-responsive.css">
        <?php
        if ($page === "index"){
            ?>
            <link rel="stylesheet" href="assets/scss/page/index.css">
            <?php
        }
        ?>

        <title>
            <?php
            if (!empty($titlePage)){
                echo $titlePage;
            }
            else{
                ?>
                Book Kevin Guillier
                <?php
            }
            ?>
        </title>
    </head>
    <body>
    <?php include_once 'block/header.php'; ?>

    <?php include_once 'page/'.$page.'.php'; ?>

    <?php include_once 'block/footer.php'; ?>

    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/block/header.js"></script>

    <?php
    if ($page === "index"){
        ?>
        <script src="assets/js/raphael-2.1.1.js"></script>
        <script src="assets/js/justgage-1.3.1-revert.js"></script>
        <?php
    }
    ?>


    <script src="assets/js/page/<?php echo $page; ?>.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151900187-1"></script>-->
<!--    <script>-->
<!--        window.dataLayer = window.dataLayer || [];-->
<!--        function gtag(){dataLayer.push(arguments);}-->
<!--        gtag('js', new Date());-->
<!---->
<!--        gtag('config', 'UA-151900187-1');-->
<!--    </script>-->
    </body>
</html>

