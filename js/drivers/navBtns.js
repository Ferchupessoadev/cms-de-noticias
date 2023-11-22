function driversNavBtns() {
    const navBtns = document.querySelectorAll(".nav__li");
    navBtns.forEach(navBtn => {
        navBtn.addEventListener("mouseover",e => {
            try {
                if(navBtn.children[1].className == "events-ul") {
                    navBtn.children[1].style.animation = `aparecer 0.2s ease-in-out`;
                    setTimeout(() => {
                        navBtn.children[1].style.opacity = "1";
                    }, 200);
                }
            } catch (error) {
                console.log(error);
                console.clear()
            }
        })
    })
}

driversNavBtns();
export default driversNavBtns;