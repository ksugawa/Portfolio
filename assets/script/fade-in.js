export default function fadeIn() {
  const fadeInTarget = document.querySelectorAll(".fade-in");

  function handleScroll() {
    for (let i = 0; i < fadeInTarget.length; i++) {
      const rect = fadeInTarget[i].getBoundingClientRect().top;
      const scroll = window.pageYOffset;
      const offset = rect + scroll;
      const windowHeight = window.innerHeight;
      if (scroll > offset - windowHeight + 150) {
        fadeInTarget[i].classList.add("scroll-in");
      } else {
        fadeInTarget[i].classList.remove("scroll-in");
      }
    }
  }
  
  window.addEventListener("scroll", handleScroll);
  handleScroll();

  return {
    handleScroll
  };
}
