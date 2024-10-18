const arrow = document.getElementById("arrowPromo");
const promoPole = document.getElementById("promo");

if (arrow && promoPole) {
    arrow.addEventListener("click", () => {
        promoPole.classList.toggle("active");
    });
}


