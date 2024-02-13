export default function textAnimation() {
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
};