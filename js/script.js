$('#js-slider').slick({
    arrows: true, 
    dots: true, 
    appendDots: $('.dots'), 
    speed: 1000, 
    slidesToShow: 1, 
    centerMode: true, 
    variableWidth: true,
  });

$(".navbtn").click(function () {
    $(this).toggleClass('active');
      $(".menu").toggleClass('panelactive');
      $("main,footer").toggleClass('mainblur');
  });
  
$(".menu a").click(function () {
      $(".navbtn").removeClass('active');
      $(".menu").removeClass('panelactive');
      $("main,footer").removeClass('mainblur');
  });
  
  
  
  