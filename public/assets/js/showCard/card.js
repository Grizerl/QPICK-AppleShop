const buyModal = document.getElementById("buyModal");
const buyBtn = document.getElementById("buyBtn");
const NotWorking = document.getElementById("not-working-service");
const closeModal = document.getElementsByClassName("close")[0];
const defaultBtn = document.getElementsByClassName("default-btn")[0];

// Відкрити модальне вікно при натисканні на "Купити"
buyBtn.onclick = function() {
  buyModal.style.display = "block";
}

NotWorking.onclick = function()
{
  alert("Дана функція тимчасово не працює. Вибачте за незручності.");
}

defaultBtn.onclick = function()
{
  buyModal.style.display = "none";
}
// Закрити модальне вікно при натисканні на хрестик
closeModal.onclick = function()
{
  buyModal.style.display = "none";
}

// Закрити модальне вікно при натисканні за його межами
window.onclick = function(event) {
  if (event.target == buyModal) {
    buyModal.style.display = "none";
  }
}