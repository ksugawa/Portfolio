import Slider from "./slider";
import fadeIn from "/fade-in";
import textAnimation from "./text-animation";
import skillSet from "./skill-set";
import Nav from "./navigation";
import Validation from "./validation";

window.addEventListener("DOMContentLoaded", function () {
  const SliderInstance = Slider();
  const fadeInInstance = fadeIn();
  const textAnimationInstance = textAnimation();
  const skillSetInstance = skillSet();
  const NavInstance = Nav();
  const ValidationInstance = Validation();
});
