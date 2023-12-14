const leftContent = document.querySelector(".LeftContent");

leftContent.addEventListener("mouseenter", function () {
    leftContent.classList.add("zoomOUT");
});

leftContent.addEventListener("mouseleave", function () {
    leftContent.classList.remove("zoomOUT");
});