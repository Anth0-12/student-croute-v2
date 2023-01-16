
$('.slider').slick({
  rows: 2,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
      {
      breakpoint: 768,
      settings: {
         slidesToShow: 1           
      }
     }
   ]            
 }); 

$(".slick-next").text("Suivant");

$(".slick-prev").text("Précédent");



