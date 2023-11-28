document.addEventListener("DOMContentLoaded", function () {
    var nav = document.querySelector(".nav");
    var logo = document.querySelector(".nav .container .logo a");
    var links = document.querySelectorAll(".nav div.main_list ul li a");
    var dropdownBtns = document.querySelectorAll("#dropdownBtn i");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            nav.style.backgroundColor = "#003442";
            logo.style.color = "white";
            links.forEach(function (link) {
                link.style.color = "white";
            });
            dropdownBtns.forEach(function (btn) {
                btn.style.backgroundColor = "white";
            });
                } else {
            nav.style = nav.style;
            logo.style = logo.style;
            links.forEach(function (link) {
                link.style = link.style;
            });
            dropdownBtns.forEach(function (btn) {
                btn.style = btn.style; // Reset to default
            });
            }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var dropdownBtn = document.getElementById("dropdownBtn");
    var navList = document.getElementById("navList");

    dropdownBtn.addEventListener("click", function () {
        navList.style.display =
            navList.style.display === "none" || navList.style.display === ""
                ? "flex"
                : "none";
    });
});
