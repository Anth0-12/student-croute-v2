<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="style/style.css">
    <script src="js/slick_index.js" defer></script>
    <script src="js/carousel.js" defer></script>
    <script src="js/bouton_top.js" defer></script>
    <script src="js/afficher_masquer_fav_tel.js" defer></script>
    <script src="js/carousel_tel.js" defer></script>

    <!-- <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />


<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Student Croûte</title>
</head>
<body>



<?php
include 'partie_page/header/header_accueil.html'
?>


        <!---------------------------------------------------------------- page -------------------------------------------------------------------------------------->


                        <!--------------------------------------- fav ordi ----------------------------------------------------------------->
            
        <?php
        include 'partie_page/barre_favoris.html'
        ?>

                        <!--------------------------------------- carrousel ordi ----------------------------------------------------------------->


        <main id="page_accueil">

            <?php
            include 'partie_page/carrousel.html'
            ?>
                
                    

                        <!--------------------------------------- formule ----------------------------------------------------------------->

            <?php
            include 'partie_page/formule.html'
            ?>

                        <!--------------------------------------- horaire ----------------------------------------------------------------->
                                        
            <?php
            include 'partie_page/horaire.html'
            ?>
                                        
        </main>


        <!---------------------------------------------------------------- footer -------------------------------------------------------------------------------------->

            
            <?php
            include 'partie_page/footer_accueil.html'
            ?>


        <!---------------------------------------------------------------- bouton top -------------------------------------------------------------------------------------->

        <?php
        include 'partie_page/bouton_top.html'
        ?>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>