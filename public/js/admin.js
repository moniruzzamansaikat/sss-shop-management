const sidebarTogglerButton = document.querySelector(".main_sidebar_toggler");

sidebarTogglerButton.addEventListener("click", function () {
    document.querySelector("aside.main_sidebar").classList.toggle("active");
});

// modal form submission
document.querySelector(".modal-footer").addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-primary")) {
        e.target.parentElement.parentElement.querySelector("form").submit();
    }
});
