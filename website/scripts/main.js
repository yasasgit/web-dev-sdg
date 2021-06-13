let i;
let slideIndex = 0;
let slides = document.getElementsByClassName("Slides");
let dots = document.getElementsByClassName("dot");
let prevScrollPos = window.pageYOffset;
showSlides();

function showSlides() {

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000);
}

function plusSlides(position) {
    slideIndex += position;
    if (slideIndex > slides.length) {
        slideIndex = 1
    } else if (slideIndex < 1) {
        slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function currentSlide(index) {
    if (index > slides.length) {
        index = 1
    } else if (index < 1) {
        index = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
}

function responsive() {
    let x = document.getElementById("nav");
    if (x.className === "navi") {
        x.className += "-responsive";
    } else {
        x.className = "navi";
    }
}

function showMail() {
    let txt = confirm("Do you want to contact innovator?");
    if (txt === true) {
        window.location.href = "mailto:mail@example.org";
    } else {
        alert("thank you");
    }
}

function hideNav() {
    let nav = document.getElementsByClassName("navi");
    let menu = document.getElementsByClassName("menu-li");
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        nav[0].style.top = "0";
        menu[0].style.top = "0";
    } else {
        nav[0].style.top = "-80px";
        menu[0].style.top = "-80px";
    }
    prevScrollPos = currentScrollPos;
}

// function eco() {
//     document.body.style.backgroundImage = "url('../media/vega-car.jpg')";
// }
//
// function cam() {
//     document.body.style.backgroundImage = "url('../media/F1.jpg')";
// }
//
// function other() {
//     document.body.style.backgroundImage = "url('../media/slide1.jpg')";
// }
//
// function solid() {
//     document.body.style.backgroundImage = "url('../media/slide2.jpg')";
//
// }

function openTab(evt, tabName) {
    let i, content, btn;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    btn = document.getElementsByClassName("btn");
    for (i = 0; i < btn.length; i++) {
        btn[i].className = btn[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
function openAcc(panName) {
    let x = document.getElementById(panName);
    if (x.className.indexOf("show") === -1) {
        x.style.display = "block";
        x.className += " show";
        x.previousElementSibling.className += " active";
    } else {
        x.style.display = "none";
        x.className = x.className.replace(" show", "");
        x.previousElementSibling.className = x.previousElementSibling.className.replace(" active", "");
    }
}