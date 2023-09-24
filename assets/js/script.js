// スライダー
$(function () { 
  $('#js-slider').slick({
    arrows: true,
    dots: true,
    appendDots: $('.dots'),
    speed: 1000,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
  });
});

// ナビゲーションボタンアニメーション
document.querySelector('.navbtn').addEventListener('click', function () {
  document.querySelector('.navbtn').classList.toggle('active');
  document.querySelector('.menu').classList.toggle('panelactive');
});

document.querySelector('.menu a').addEventListener('click', function () {
  element.classList.remove('panelactive');
});

// スキルカードアニメーション
document.getElementById('skill-card_develop').addEventListener('click', function () {

  document.getElementById('develop-skill-set').style.display = 'block';

  document.getElementById('design-skill-set').style.display = 'none';
});

document.getElementById('skill-card_design').addEventListener('click', function () {

  document.getElementById('develop-skill-set').style.display = 'none';

  document.getElementById('design-skill-set').style.display = 'block';
});
document.getElementById('skill-set-develop').addEventListener('click', function () {

  document.getElementById('develop-skill-set').style.display = 'block';

  document.getElementById('design-skill-set').style.display = 'none';
});

document.getElementById('skill-set-design').addEventListener('click', function () {

  document.getElementById('develop-skill-set').style.display = 'none';

  document.getElementById('design-skill-set').style.display = 'block';
});

// fade-inアニメーション
let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in');
    }
    else {
      fadeInTarget[i].classList.remove('scroll-in');
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

//ページ内スクロール
$(function () {
  $('a[href^="#"]').click(function () { //ページ内スクロール
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 100;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});

//バリデーション




