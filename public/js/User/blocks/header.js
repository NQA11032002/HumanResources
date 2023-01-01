let logined = document.querySelector(".nav-logined");
let navLogined = document.querySelector('.logined__contain');

logined.addEventListener("click", () => {
    let height = navLogined.style.height;

    if (height == "160px") {
        navLogined.style.height = "0px";
        navLogined.style.opacity = 0;
    } else {
        navLogined.style.height = "160px";
        navLogined.style.opacity = 1;
    }
})
