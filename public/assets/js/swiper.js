document.addEventListener('DOMContentLoaded', function () {
    // Swiper, який рухається вправо (за замовчуванням)
    const swiperRight = new Swiper('.AirPods-Swiper', {
        loop: true, 
        spaceBetween: 30,
        autoplay: {
            delay: 2500, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            100: {
                slidesPerView: 1
            },
            551: {
                slidesPerView:2
            },
            855: {
                slidesPerView:3
            },
        },
        speed: 600, 
        effect: 'slide', 
    });

    // Swiper, який рухається вліво (reverseDirection)
    const swiperLeft = new Swiper('.AppleWatch-Swiper', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 2500, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            100: {
                slidesPerView: 1
            },
            551: {
                slidesPerView:2
            },
            855: {
                slidesPerView:3
            },
        },
        speed: 600, 
        effect: 'slide', 
        reverseDirection: true,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".burger-container");
    const closeBtn = document.querySelector(".close-btn-burger");
    const menuBtn = document.querySelector(".menu-btn");

    menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
    });
});