const themeToggle = document.getElementById("theme-toggle");
const body = document.body;

themeToggle.addEventListener("click", () => {
  if (body.classList.contains("dark")) {
    body.classList.remove("dark");
    themeToggle.classList.remove("dark");
    themeToggle.textContent = "Prepnúť na tmavú tému";
  } else {
    body.classList.add("dark");
    themeToggle.classList.add("dark");
    themeToggle.textContent = "Prepnúť na svetlú tému";
  }
});
