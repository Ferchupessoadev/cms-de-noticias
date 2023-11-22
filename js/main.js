import driversNavBtns from './drivers/navBtns.js'



const btnPrimary = document.querySelector(".nav__h1-responsive");
btnPrimary.addEventListener("click", e => {
    window.location.reload()
});

driversNavBtns();
// parte para manejar el nav en reponsive
const btnNav = document.querySelector(".nav-responsive__nav-btn");
const navResponsive = document.querySelector(".nav-responsive");
btnNav.addEventListener("click", () => {
    const navBar = navResponsive.children[2]
    navBar.classList.toggle("toogle-nav");
    if (navBar.className == "nav__ul-responsive toogle-nav") {
        navResponsive.style.position = "fixed";
        setTimeout(() => {
            navResponsive.style.background = "rgb(100, 3, 3)";
        }, 480);
    } else {
        navResponsive.style.position = "absolute";
        setTimeout(() => {
            navResponsive.style.background = "transparent"
        }, 480);
    };
    navBar.style.transition = "transform 0.5s ease-in-out";
});



addEventListener("scroll", () => {
    const widgetWhatsapp = document.querySelector(".widget");
    if (window.scrollY >= 100) {
        widgetWhatsapp.classList.add("widget-scroll-animation");
    } else {
        try {
            widgetWhatsapp.classList.remove("widget-scroll-animation");
        } catch (err) {
            console.log(err)
        }
    }
})