window.addEventListener("DOMContentLoaded", function () {
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

  skillSets[1].style.display = "none"; // #design-skill-set
  skillSets[2].style.display = "none"; // #seo-skill-set

  function hideAllSkillSets() {
    skillSets.forEach((set) => {
      set.style.display = "none";
    });
  }

  skillCards.forEach((card, index) => {
    card.addEventListener("click", function () {
      hideAllSkillSets();
      skillSets[index].style.display = "block";
    });
  });

  skillSetsLinks.forEach((link, index) => {
    link.addEventListener("click", function () {
      hideAllSkillSets();
      skillSets[index].style.display = "block";
    });
  });
});

export default {};
