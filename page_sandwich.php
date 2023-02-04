<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
    
        <link rel="stylesheet" href="style/style.css">
        <script src="js/page_sandwich.js" defer></script>
        <script src="js/bouton_top.js" defer></script>
    
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
    
        <title>Sandwiches</title>
    </head>
</head>
<body>
    
<!---------------------------------------------------------------- header -------------------------------------------------------------------------------------->

            <!---------------------------------------------- header ordinateur ----------------------------------------------------------------->
            <?php
include 'partie_page/header/header_autre.html'
?>
      

<!---------------------------------------------------------------- fin header -------------------------------------------------------------------------------------->


<!---------------------------------------------------------------- contenu page -------------------------------------------------------------------------------------->
    
<?php
include 'partie_page/barre_favoris.html'
?>


<div class="main">

    
    
    <div id="myBtnContainer">

      <h2>Nos Sandwiches</h2>

      <div class="categ_boutons">
        <button class="btn active" onclick="filterSelection('all')"> Voir tous nous sandwiches</button>
        <button class="btn" onclick="filterSelection('poulet')"> Poulet</button>
        <button class="btn" onclick="filterSelection('thon')"> Thon</button>
        <button class="btn" onclick="filterSelection('divers')"> Divers</button>
      </div>
      
    </div>
    
    <!-- Portfolio Gallery Grid -->
    <div class="row">

      <div class="column thon">
        <div class="content">
          <h4>Sandwich au thon piquant</h4>

          <div class="img">
            <img src="assets/img/sandwiches.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Thon, piments, sauce piquante <br> <span>2,90€</span> </p>

        </div>
      </div>

      <div class="column thon">
        <div class="content">
          <h4>Sandwich au thon mayonnaise</h4>

          <div class="img">
            <img src="assets/img/sandwiches.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Thon, salade, oeufs cuit dure, sauce mayonnaise <br> <span>2,90€</span></p>

        </div>
      </div>

      <div class="column thon">
        <div class="content">
          <h4>Sandwich au thon andalouse</h4>

          <div class="img">
            <img src="assets/img/sandwiches.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Thon, salade, sauce Andalouse <br> <span>2,90€</span></p>

        </div>
      </div>


      <div class="column divers">
        <div class="content">
          <h4>Sandwich au jambon</h4>

          <div class="img">
            <img src="assets/img/boissons 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Jambon <br> <span>2,90€</span></p>

        </div>
      </div>

      <div class="column divers">
        <div class="content">
          <h4>Sandwich jambon beurre</h4>

          <div class="img">
            <img src="assets/img/boissons 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Jambon, beurre <br> <span>2,90€</span></p>

        </div>
      </div>
      
      <div class="column divers">
        <div class="content">
          <h4>Sandwich au fromage</h4>

          <div class="img">
            <img src="assets/img/boissons 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Beurre, fromage <br> <span>2,90€</span></p>

        </div>
      </div>


      <div class="column poulet">
        <div class="content">
          <h4>Sandwich au poulet mayonnaise</h4>

          <div class="img">
            <img src="assets/img/panini 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Poulet, salade, oeufs cuit dur, sauce mayaonnaise <br> <span>2,90€</span></p>

        </div>
      </div>

      <div class="column poulet">
        <div class="content">
          <h4>Sandwich au poulet piquant</h4>

          <div class="img">
            <img src="assets/img/panini 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Poulet, piments, sauce piquante <br> <span>2,90€</span></p>

        </div>
      </div>
    
      <div class="column poulet">
        <div class="content">
          <h4>Sandwich au poulet andalouse</h4>
          
          <div class="img">
            <img src="assets/img/panini 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Poulet, salade, sauce Andalouse <br> <span>2,90€</span></p>

        </div>
      </div>

      <div class="column poulet">
        <div class="content">
          <h4>Sandwich au poulet curry</h4>

          <div class="img">
            <img src="assets/img/panini 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Poulet, salade, poivrons, curry <br> <span>2,90€</span></p>

        </div>
      </div>

      <div class="column poulet">
        <div class="content">
          <h4>Sandwich au poulet rôti</h4>

          <div class="img">
            <img src="assets/img/panini 2.png" alt="Sandwich au jambon" class="image">
          </div>

          <p class="description">Poulet rôti, salade, oeufs cuit dur <br> <span>2,90€</span></p>

        </div>
      </div>
    <!-- END GRID -->
    </div>
    
    <!-- END MAIN -->
    </div>
  
  
<!---------------------------------------------------------------- fin contenu page -------------------------------------------------------------------------------------->


<!---------------------------------------------------------------- footer -------------------------------------------------------------------------------------->

            
<?php
include 'partie_page/footer/footer_sandwich.html'
?>


<!---------------------------------------------------------------- image deco + bouton top -------------------------------------------------------------------------------------->

<img src="assets/img/astronaute.png" alt="" id="astronaute_sandwich">

<img src="assets/img/fusee.png" alt="" id="fusee_sandwich">

<?php
include 'partie_page/bouton_top.html'
?>

<!---------------------------------------------------------------- fin image deco + bouton top -------------------------------------------------------------------------------------->



</body>
</html>