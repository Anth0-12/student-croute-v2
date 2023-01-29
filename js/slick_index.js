
$('.container').slick({
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

// $(".slick-next").text("Suivant");

// $(".slick-prev").text("Précédent");

$('.slider_ocalme').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  prevArrow: false,
    nextArrow: false
});

