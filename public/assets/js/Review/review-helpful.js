document.addEventListener("DOMContentLoaded", function() {
    const helpfulButtons = document.querySelectorAll('.review-helpful');

    helpfulButtons.forEach(button => {
        button.addEventListener("click", function() {
       
            let clickCount = parseInt(button.getAttribute('data-click-count')) || 0; 
            clickCount++;
            button.setAttribute('data-click-count', clickCount);

            button.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> Корисно(<span class="count">${clickCount}</span>)`;
        });
    });
});
