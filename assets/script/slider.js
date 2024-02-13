window.addEventListener("DOMContentLoaded", function () {
  const topElement = document.getElementById("head-line_top");
  const bottomElement = document.getElementById("head-line_btm");

  //const projectSlider = document.getElementById('project-slider');
  //const projectItem = document.querySelectorAll('#project-slider > .item');

  function headerHandleScroll() {
    if (window.location.pathname === "/") {
      const scrollY = window.scrollY;
      const color = scrollY >= scrollThreshold ? "#262626" : "#fff";

      headerLinks.forEach((link) => {
        link.style.color = color;
      });
    }
  }

  function updateHeadlinePosition() {
    if (window.location.pathname === "/") {
      const scrollY = window.scrollY;

      topElement.style.transform = `translateX(${scrollY}px)`;
      bottomElement.style.transform = `translateX(-${scrollY}px)`;
    }
  }

  // slider 
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

  // projectSlider.addEventListener("wheel", (e) => {
  //   if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
  //     e.preventDefault();
  //     projectSlider.scrollLeft += e.deltaY;

  //     //const maxScrollLeft = projectSlider.scrollWidth - projectSlider.clientWidth;
  //     //if ((projectSlider.scrollLeft <= 0 && e.deltaY < 0) ||
  //     //(projectSlider.scrollLeft >= maxScrollLeft && e.deltaY > 0)) {
  //     // return;
  //     //}
  // }
});

export default {};
