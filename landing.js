const navEl = document.querySelector(".navbar");
const banner_paraf = document.querySelector(".banner-paraf");
const banner_title = document.querySelector(".banner-title");
const btnSeeMore = document.querySelector(".see-more");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 60) {
    navEl.classList.add("navbar-scrolled");
  } else if (window.scrollY < 60) {
    navEl.classList.remove("navbar-scrolled");
  }
});
