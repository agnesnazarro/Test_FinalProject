import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById("darkModeToggle");
    const currentTheme = localStorage.getItem("theme");

    // Apply the saved theme on page load
    if (currentTheme === "dark") {
        document.body.setAttribute("data-theme", "dark");
        darkModeToggle.checked = true;
    } else {
        document.body.setAttribute("data-theme", "light");
    }

    // Listen for toggle changes
    darkModeToggle.addEventListener("change", function() {
        if (darkModeToggle.checked) {
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        } else {
            document.body.setAttribute("data-theme", "light");
            localStorage.setItem("theme", "light");
        }
    });
});