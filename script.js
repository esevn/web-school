var sideNav = document.querySelector("aside");

function openNavbar() {
  sideNav.classList.add("translate-x-0");
  sideNav.classList.remove("-translate-x-full");
}

function closeNavbar() {
  sideNav.classList.add("-translate-x-full");
  sideNav.classList.remove("translate-x-0");
}
