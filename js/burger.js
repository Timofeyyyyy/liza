let menuBtn = document.querySelector(".menu-btn");
let menu = document.querySelector(".menu");
let fon = document.querySelector(".fon-burger-menu");
const link = document.querySelectorAll(".burger-link");
menuBtn.addEventListener("click", function () {
  menuBtn.classList.toggle("active");
  menu.classList.toggle("active");
  fon.classList.toggle("active");
});
document.onclick = function (ClickEvent) {
  if (ClickEvent.target.id !== "menu" && ClickEvent.target.id !== "icon") {
    menuBtn.classList.remove("active");
    menu.classList.remove("active");
    fon.classList.remove("active");
  }
};
