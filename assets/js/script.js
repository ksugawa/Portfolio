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
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');

function showError(input, message) { // Show input error message
  const formControl = input.parentElement;
  formControl.className = 'form-control error';
  const small = formControl.querySelector('small');
  small.innerText = message;
}

function showSuccess(input) { // Show success outline
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}

function checkEmail(input) {// Check email is valid
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'メールアドレスが無効です');
  }
}

function checkRequired(inputArr) { //Check required field
  let isRequired = false;
  inputArr.forEach(function(input) {
      if (input.value.trim() === '') {
          showError(input, `${getFieldName(input)} is required`);
          isRequired = true;
      } else {
          showSuccess(input);
      }
  });

  return isRequired;
}

function checkLength(input, min, max) { //Check input length
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must be at least ${min} characters`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must be less than ${max} characters`
    );
  } else {
    showSuccess(input);
  }
}

function getFieldName(input) { //Get fieldname
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

form.addEventListener('submit', function(e) { //Event listeners
  e.preventDefault();

  if(checkRequired([username, email])){
    checkLength(username, 3, 15);
    checkEmail(email);
  }

});




