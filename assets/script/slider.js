export default function Slider() {
  const topElement = document.getElementById("head-line_top");
  const bottomElement = document.getElementById("head-line_btm");

  // updateHeadlinePosition
  function updateHeadlinePosition() {
    if (window.location.pathname === "/") {
      const scrollY = window.scrollY;
    }
    topElement.style.transform = `translateX(${scrollY}px)`;
    bottomElement.style.transform = `translateX(-${scrollY}px)`;
  }

  // js-slider
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

  // プロジェクトスライダー
  const projectItem = document.querySelectorAll('#project-slider > .item');
  let currentIndex = 0;

  function projectSlide() {
    function nextMove() {

      const nextIndex = (currentIndex + 1) % projectItem.length;

      projectItem[currentIndex].classList.remove('active');
      projectItem[nextIndex].classList.add('active');

      currentIndex = nextIndex;
    }

    setInterval(nextMove, 1200);
  }
  projectSlide();
};
