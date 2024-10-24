document.addEventListener('DOMContentLoaded', function () {
    // Swiper, який рухається вправо (за замовчуванням)
    const swiperRight = new Swiper('.AirPods-Swiper', {
        loop: true, // Enable infinite loop
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 2500, // Автоматична зміна кожні 2.5 секунди
            disableOnInteraction: false, // Продовжує прогортати після взаємодії
        },
        speed: 600, // Швидкість анімації переходу
        effect: 'slide', // Тип ефекту
    });

    // Swiper, який рухається вліво (reverseDirection)
    const swiperLeft = new Swiper('.AppleWatch-Swiper', {
        loop: true, // Enable infinite loop
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 2500, // Автоматична зміна кожні 2.5 секунди
            disableOnInteraction: false, // Продовжує прогортати після взаємодії
        },
        speed: 600, // Швидкість анімації переходу
        effect: 'slide', // Тип ефекту
        reverseDirection: true, // Прокручування в інший бік
    });
});
