$(function () { // スライダー
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

$(function () {  // navボタン
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
});

$(function () { //各スキルカードを選択した際に表示するスキルセットを変える
  document.getElementById('skill-card_develop').addEventListener('click', function() {
    // Developのdivを表示
    document.getElementById('develop-skill-set').style.display = 'block';
    // Designのdivを非表示
    document.getElementById('design-skill-set').style.display = 'none';
  });
  
  document.getElementById('skill-card_design').addEventListener('click', function() {
    // Developのdivを非表示
    document.getElementById('develop-skill-set').style.display = 'none';
    // Designのdivを表示
    document.getElementById('design-skill-set').style.display = 'block';
  });  
});

let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
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

document.addEventListener('DOMContentLoaded', function() { // ページ読み込み時に実行
  let header = document.querySelector('header');
  let topImage = document.querySelector('.topimage');
  let mainContainer = document.querySelector('.main-container');

  window.addEventListener('scroll', function() {
    // topImageの下端とheaderの下端の位置を比較
    if (window.pageYOffset + header.offsetHeight > topImage.offsetTop + topImage.offsetHeight) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});



