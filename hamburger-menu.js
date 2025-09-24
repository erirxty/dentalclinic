document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.getElementById("g-nav-menu");
  const body = document.body;

  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", function () {
      const isExpanded = this.getAttribute("aria-expanded") === "true" || false;
      this.setAttribute("aria-expanded", !isExpanded);
      navMenu.classList.toggle("is-open");
      body.classList.toggle("no-scroll"); // スクロール無効化クラスをトグル
    });
  }
});
