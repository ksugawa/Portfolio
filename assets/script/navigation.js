window.addEventListener("DOMContentLoaded", function () {
  const navBtn = document.querySelector(".navbtn");
  const navbtnLines = document.querySelectorAll(".navbtn > span");
  const menu = document.querySelector(".menu");
  const menuLinks = document.querySelectorAll(".menu a");

  function toggleMenu() {
    const isActive = navBtn.classList.contains("active");
    navBtn.classList.toggle("active", !isActive);
    menu.classList.toggle("panelactive", !isActive);
  }

  function handleNavScroll() {
    const scrollY = window.scrollY;
    const scrollThreshold = 800;
    const changeNavLinesColor = scrollY >= scrollThreshold;
    const color = changeNavLinesColor ? "#262626" : "#fff";

    if (changeNavLinesColor !== navBtn.dataset.colorChanged) {
      navbtnLines.forEach((line) => {
        line.style.background = color;
      });
      navBtn.dataset.colorChanged = changeNavLinesColor;
    }
  }

  menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
  });

  window.addEventListener("scroll", handleNavScroll);
  navBtn.addEventListener("click", toggleMenu);
});

export default {};
