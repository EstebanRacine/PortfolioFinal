let btnIcon = document.getElementById('iconeMenu'),
    body = document.body,
    nav = document.getElementById('Menu');

const apparitionMenu = () => {
    console.log(btnIcon.style.color);
    if (btnIcon.classList.contains("fa-xmark")){
        btnIcon.style.color = "#ffe7d4";
        btnIcon.className = "fa-solid fa-bars";
        nav.style.marginTop = "-100vh";
        body.style.height = "max-content";
        body.style.overflowY = "auto"
    }else{
        btnIcon.style.color = "#ffe7d4";
        nav.style.marginTop = "0";
        btnIcon.className = "fa-solid fa-xmark";
        body.style.height = "100vh";
        body.style.overflowY = "hidden"
    }
}

const modifSizeNav = () =>{
    if (window.innerWidth >= 800  && btnIcon.style.color === "#1c9aea"){
        console.log(36);
        nav.style.marginLeft = "0";
    }
}

window.addEventListener("resize", modifSizeNav);