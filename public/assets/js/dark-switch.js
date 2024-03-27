function ModeSwitch() {
    var toggle = document.querySelector(".dark-switch");
    var body = document.body;
    var isDarkMode = localStorage.getItem("darkMode");

    // Check if there's a stored preference for dark mode
    if (isDarkMode === "true") {
        body.classList.add("dark-mode");
        toggle.classList.add("active");
    } else {
        body.classList.remove("dark-mode");
        toggle.classList.remove("active");
    }

    toggle.addEventListener("click", function (e) {
        e.preventDefault();
        body.classList.toggle("dark-mode");
        toggle.classList.toggle("active");

        // Update local storage with the new preference
        var isDarkMode = body.classList.contains("dark-mode");
        localStorage.setItem("darkMode", isDarkMode);
    });
}

// Call the function to initialize
ModeSwitch();
