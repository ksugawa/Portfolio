$(function(){
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

let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in');
    }
  }
});


//Switch light/dark

$("#switch").on('click', function () {
if ($("body").hasClass("light")) {
$("body").removeClass("light");
$("#switch").removeClass("switched");
}
else {
$("body").addClass("light");
$("#switch").addClass("switched");
}
});
});
  
  
  
  