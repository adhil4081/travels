document.addEventListener("DOMContentLoaded", function () {
    var nav = document.querySelector(".nav");

    window.addEventListener("scroll", function () {
        var logo = document.querySelector(".nav .container .logo a");

        if (window.scrollY > 50) {
            nav.style.backgroundColor = "black";
            logo.style.color = "white";
        } else {
            nav.style = nav.style;
        }
    });
});
