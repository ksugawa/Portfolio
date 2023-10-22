//ヘッダーのスクロール時文字色変更
window.addEventListener('DOMContentLoaded', function () {
  if (window.location.pathname === '/') {
    const header = document.querySelector('.header-container');
    const headerLinks = header.querySelectorAll('.sitetitle a');
    const scrollThreshold = 800;

    function handleScroll() {
      const scrollY = window.scrollY;
      const color = scrollY >= scrollThreshold ? '#262626' : '#fff';

      headerLinks.forEach((link) => {
        link.style.color = color;
      });
    };

    window.addEventListener('scroll', handleScroll);
  }
});


//ページ内スクロール
window.addEventListener('DOMContentLoaded', function () {
  const links = document.querySelectorAll('a[href^="#"]');

  function smoothScroll(target) {
    const targetOffset = target.getBoundingClientRect().top + window.scrollY;
    const initialOffset = window.scrollY;
    const distance = targetOffset - initialOffset - 100;
    const duration = 500;
    const startTime = performance.now();

    function scroll(timestamp) {
      const currentTime = timestamp - startTime;
      const progress = Math.min(currentTime / duration, 1);
      window.scrollTo(0, initialOffset + distance * progress);

      if (currentTime < duration) {
        requestAnimationFrame(scroll);
      }
    }

    requestAnimationFrame(scroll);
  }

  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();

      const href = link.getAttribute('href');
      const target = document.querySelector(href);

      if (target) {
        smoothScroll(target);
      }
    });
  });
});


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


// ヘッドライン,プロジェクトスライダー
if (window.location.pathname === '/') {
  document.addEventListener("scroll", () => {
    const topElement = document.getElementById('head-line_top');
    const bottomElement = document.getElementById('head-line_btm');
    //const projectSlider = document.getElementById('project-slider');

    const scrollY = window.scrollY;

    topElement.style.transform = `translateX(${scrollY}px)`;
    bottomElement.style.transform = `translateX(-${scrollY}px)`;
    //projectSlider.style.transform = `translateX(${scrollY}px)`;
  });
}


// ナビゲーションボタンアニメーション
window.addEventListener('DOMContentLoaded', function () {
  const navbtn = document.querySelector('.navbtn');
  const menu = document.querySelector('.menu');

  function toggleMenu() {
    navbtn.classList.toggle('active');
    menu.classList.toggle('panelactive');
  }

  navbtn.addEventListener('click', toggleMenu);

  const menuLinks = document.querySelectorAll('.menu a');

  menuLinks.forEach((link) => {
    link.addEventListener('click', () => {
      menu.classList.remove('panelsctive');
    });
  });
});


// スキルカードとスキルセットの要素を取得
window.addEventListener('DOMContentLoaded', function () {
  const skillCards = [
    document.getElementById('skill-card_design'),
    document.getElementById('skill-card_develop'),
    document.getElementById('skill-card_marketing')
  ];

  const skillSets = [
    document.getElementById('design-skill-set'),
    document.getElementById('develop-skill-set'),
    document.getElementById('seo-skill-set')
  ];

  const skillSetsLinks = [
    document.getElementById('skill-set-design'),
    document.getElementById('skill-set-develop'),
    document.getElementById('skill-set-marketing'),
  ];

  skillSets[1].style.display = 'none'; // #design-skill-set
  skillSets[2].style.display = 'none'; // #seo-skill-set

  function hideAllSkillSets() {
    skillSets.forEach((set) => {
      set.style.display = 'none';
    });
  }

  skillCards.forEach((card, index) => {
    card.addEventListener('click', function () {
      hideAllSkillSets();
      skillSets[index].style.display = 'block';
    });
  });

  skillSetsLinks.forEach((link, index) => {
    link.addEventListener('click', function () {
      hideAllSkillSets();
      skillSets[index].style.display = 'block';
    });
  });
});


// fade-inアニメーション
const fadeInTarget = document.querySelectorAll('.fade-in');

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


//バリデーション
window.addEventListener('DOMContentLoaded', function () {
  if (window.location.pathname === '/') {
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
      inputArr.forEach(function (input) {
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

    form.addEventListener('submit', function (e) { //Event listeners
      e.preventDefault();

      if (checkRequired([username, email])) {
        checkLength(username, 3, 15);
        checkEmail(email);
      }

    });
  };
});


