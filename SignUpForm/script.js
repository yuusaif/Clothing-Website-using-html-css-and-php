function toggleDropdown(event) {
    event.preventDefault();
    var dropdown = event.target.parentNode;
    dropdown.classList.toggle("active");
}

document.addEventListener("click", function (event) {
    var dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach(function (dropdown) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove("active");
        }
    });
});
