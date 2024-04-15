document.addEventListener("DOMContentLoaded", function () {

var body = document.body;
    var isDarkMode = localStorage.getItem("darkMode");
    if (isDarkMode === "true") {
        body.classList.add("dark-mode");
    } else {
        body.classList.remove("dark-mode");
    }
});
