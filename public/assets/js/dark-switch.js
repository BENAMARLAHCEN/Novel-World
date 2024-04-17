function ModeSwitch() {
    var toggle = document.querySelector(".dark-switch");
    var body = document.body;
    var isDarkMode = localStorage.getItem("darkMode");
    var homeHero = document.getElementById("home");
    function homeHeroHeight() {
        if (homeHero) {
            if (homeHero.classList.contains("bg-grad-a")) {
                homeHero.classList.remove("bg-grad-a");
            }else {
                    homeHero.classList.add("bg-grad-a");
                }
        }
    }

    // Check if there's a stored preference for dark mode
    if (isDarkMode === "true") {
        body.classList.add("dark-mode");
        toggle.classList.add("active");
        homeHero.classList.remove("bg-grad-a");
    } else {
        body.classList.remove("dark-mode");
        toggle.classList.remove("active");
    }

    toggle.addEventListener("click", function (e) {
        e.preventDefault();
        body.classList.toggle("dark-mode");
        toggle.classList.toggle("active");
        homeHero.classList.toggle("bg-grad-a");

        // Update local storage with the new preference
        var isDarkMode = body.classList.contains("dark-mode");
        localStorage.setItem("darkMode", isDarkMode);
    });
}

// Call the function to initialize
ModeSwitch();
