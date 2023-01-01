let codes = document.querySelectorAll('.confirm-code');
let index = 0;

codes.forEach(e => {
    e.addEventListener("keydown", function () {
        if (e.value != "") {
            e.index ++;

            if (index <= 3) {
                codes[index].focus();
            } else {
                index = 0;
                codes[0].focus();
            }
        }
    })
})
