window.addEventListener("DOMContentLoaded", function () {
  /**************************************
   * ヘッダーのスクロール時文字色変更
   **************************************/
  const header = document.querySelector(".header-container");
  const headerLinks = header.querySelectorAll(".sitetitle a");
  const scrollThreshold = 800;

  function headerHandleScroll() {
      const scrollY = window.scrollY;
      const color = scrollY >= scrollThreshold ? "#262626" : "#fff";

      headerLinks.forEach((link) => {
        link.style.color = color;
      });
  }
  window.addEventListener("scroll", headerHandleScroll);


  /**************************************
   * ヘッドラインスライダー
   **************************************/
  const topElement = document.getElementById("head-line_top");
  const bottomElement = document.getElementById("head-line_btm");

  function updateHeadlinePosition() {
    if (window.location.pathname === "/") {
      const scrollY = window.scrollY;

      topElement.style.transform = `translateX(${scrollY}px)`;
      bottomElement.style.transform = `translateX(-${scrollY}px)`;
    }
  }
  window.addEventListener("scroll", updateHeadlinePosition);


  /**************************************
   * プロジェクトスライダー
   **************************************/
  const projectItem = document.querySelectorAll("#project-slider > .item");
  let currentIndex = 0;

  function projectSlide() {
    function nextMove() {
      const nextIndex = (currentIndex + 1) % projectItem.length;

      projectItem.forEach((item, index) => {
        if (index === nextIndex) {
          item.classList.add('active');
          item.style.transform = 'translateX(-700px)';
          item.style.opacity = '1';
        } else {
          item.classList.remove('active');
          item.style.transform = '';
          item.style.opacity = '0';
        }
      });

      currentIndex = nextIndex;
    }

    setInterval(nextMove, 2200);
  }
  projectSlide();


  /**************************************
   * テキストアニメーション
   **************************************/
  const textTarget = document.getElementById("text-target");

  if (textTarget) {
    let inner = "";

    for (let i = 0; i < textTarget.innerText.length; i++) {
      inner += `<span>${textTarget.innerText[i]}</span>`;
    }

    textTarget.innerHTML = inner;

    function textAnimation(index) {
      if (index < textTarget.children.length) {
        textTarget.children[index].classList.add("is-show");
        setTimeout(function () {
          textAnimation(index + 1);
        }, 100);
      }
    }

    function startTextAnimationOnScroll() {
      const rect = textTarget.getBoundingClientRect();
      if (rect.top < window.innerHeight) {
        textAnimation(0);
        window.removeEventListener("scroll", startTextAnimationOnScroll);
      }
    }
    window.addEventListener("scroll", startTextAnimationOnScroll);
  }


  /**************************************
   * OTHER-PAGE/ Travelスライダー
   **************************************/
  $(function () {
    $("#js-slider").slick({
      arrows: true,
      dots: true,
      appendDots: $(".dots"),
      speed: 1000,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
    });
  });

  /**************************************
   * ナビゲーションボタンアニメーション
   **************************************/
  const navBtn = document.querySelector(".navbtn");
  const navbtnLines = document.querySelectorAll(".navbtn > span");
  const menu = document.querySelector(".menu");

  function toggleMenu() {
    const isActive = navBtn.classList.toggle("active");
    menu.classList.toggle("panelactive");
    const color = isActive ? "#fff" : "#262626";
    navbtnLines.forEach((line) => {
      line.style.background = color;
    });
  }

  navBtn.addEventListener("click", toggleMenu);

  /**************************************
   * スキルカードとスキルセットの要素を取得
   **************************************/
  const skillCards = [
    document.getElementById("skill-card_design"),
    document.getElementById("skill-card_develop"),
    document.getElementById("skill-card_marketing"),
  ];

  const skillSets = [
    document.getElementById("design-skill-set"),
    document.getElementById("develop-skill-set"),
    document.getElementById("seo-skill-set"),
  ];

  const skillSetsLinks = [
    document.getElementById("skill-set-design"),
    document.getElementById("skill-set-develop"),
    document.getElementById("skill-set-marketing"),
  ];
  
  function initializeSkillSets() {
    skillSets.forEach((set, index) => {
      set.style.display = index === 0 ? 'block' : 'none';
    });
  }
  initializeSkillSets();

  function hideAllSkillSets() {
    skillSets.forEach((set) => {
      set.style.display = "none";
    });
  }

  function toggleSkillSet(index) {
    hideAllSkillSets();
    skillSets[index].style.display = "block";
  }

  skillCards.forEach((card, index) => {
    card.addEventListener("click", () => toggleSkillSet(index));
  });

  skillSetsLinks.forEach((link, index) => {
    link.addEventListener("click", () => toggleSkillSet(index));
  });

  /**************************************
   * fade-inアニメーション
   **************************************/
  const fadeInTarget = document.querySelectorAll(".fade-in");

  function handleFadeInAnimation() {
    fadeInTarget.forEach((target) => {
      const rect = target.getBoundingClientRect().top;
      const scroll = window.pageYOffset;
      const offset = rect + scroll;
      const windowHeight = window.innerHeight;
      target.classList.toggle(
        "scroll-in",
        scroll > offset - windowHeight + 150
      );
    });
  }
  window.addEventListener("scroll", handleFadeInAnimation);

  /**************************************
   * フォームバリデーション
   **************************************/
  if (window.location.pathname === "/") {
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const email = document.getElementById("email");

    function showError(input, message) {
      const formControl = input.parentElement;
      formControl.className = "form-control error";
      const small = formControl.querySelector("small");
      small.innerText = message;
    }

    function showSuccess(input) {
      const formControl = input.parentElement;
      formControl.className = "form-control success";
    }

    function checkEmail(input) {
      const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (re.test(input.value.trim())) {
        showSuccess(input);
      } else {
        showError(input, "メールアドレスが無効です");
      }
    }

    function checkRequired(inputArr) {
      let isRequired = false;
      inputArr.forEach((input) => {
        if (input.value.trim() === "") {
          showError(input, `${getFieldName(input)} is required`);
          isRequired = true;
        } else {
          showSuccess(input);
        }
      });
      return isRequired;
    }

    function checkLength(input, min, max) {
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

    function getFieldName(input) {
      return input.id.charAt(0).toUpperCase() + input.id.slice(1);
    }

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      if (checkRequired([username, email])) {
        checkLength(username, 3, 15);
        checkEmail(email);
      }
    });
  }
});
