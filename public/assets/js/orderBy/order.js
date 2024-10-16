const arrow = document.getElementById("arrowPromo");
const promoPole = document.getElementById("promo");

arrow.addEventListener("click",()=>{
    promoPole.classList.toggle("active");
});