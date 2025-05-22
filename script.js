// Toggle Dark Mode
const toggle = document.getElementById("toggle-theme");
toggle.addEventListener("click", () => {
  document.body.classList.toggle("dark");
});

// Animasi Loading
window.addEventListener("load", () => {
  const loader = document.getElementById("loader");
  loader.style.opacity = 0;
  loader.style.visibility = "hidden";
});
