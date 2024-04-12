function toggleMenu() {
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.addEventListener("click", () => {
    const body = document.querySelector("body");
    body.classList.toggle("hide-sidebar");
  });
}
toggleMenu();
