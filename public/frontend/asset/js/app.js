
// navbar scroll js start 
document.addEventListener('DOMContentLoaded', function () {
const navbar = document.querySelector('.navbar');
const scrollOffset = 50; // Adjust scroll offset as needed

window.addEventListener('scroll', function () {
    if (window.scrollY > scrollOffset) {
    navbar.classList.add('fixed-nav'); // Add class after scrolling
    } else {
    navbar.classList.remove('fixed-nav'); // Remove class before scrolling
        }
    });
});


// management slider js start 
document.querySelectorAll('.slider-wrapper').forEach((sliderWrapper, index) => {
    const productCards = sliderWrapper.querySelectorAll('.management-card');
    const prevBtn = sliderWrapper.closest('.slider-container').querySelector('.prev-btn');
    const nextBtn = sliderWrapper.closest('.slider-container').querySelector('.next-btn');
    let currentIndex = 0;
    let slideInterval;

    function slideTo(index) {
        const cardWidth = productCards[0].offsetWidth + 24; // Adjust according to management-card css margin 8*2=16 (margin: 0 8px;)
        const translateXValue = -(index * cardWidth);
        sliderWrapper.style.transform = `translateX(${translateXValue}px)`;

        if (index < productCards.length - 2) {
            // sliderWrapper.style.transform += `translateX(-${cardWidth * 0.4}px)`;
            sliderWrapper.style.transform += `translateX(-${cardWidth * 0.2}px)`; // adjust card haf
        }

        currentIndex = index;
    }

    function nextSlide() {
        if (currentIndex < productCards.length - 2) {
            slideTo(currentIndex + 1);
        } else {
            slideTo(0);
        }
    }

    function prevSlide() {
        if (currentIndex > 0) {
            slideTo(currentIndex - 1);
        } else {
            slideTo(productCards.length - 2);
        }
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 3000); // Adjust interval as needed
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    sliderWrapper.addEventListener('mouseover', stopAutoSlide);
    sliderWrapper.addEventListener('mouseout', startAutoSlide);

    startAutoSlide();
    slideTo(0); // Start with the first card showing
});


// item5 -sliders js start
document.querySelectorAll('.item5-slider-wrapper').forEach((sliderWrapper, index) => {
    const productCards = sliderWrapper.querySelectorAll('.item5-card');
    const prevBtn = sliderWrapper.closest('.item5-slider-container').querySelector('.prev-btn');
    const nextBtn = sliderWrapper.closest('.item5-slider-container').querySelector('.next-btn');
    let currentIndex = 0;
    let slideInterval;

    function slideTo(index) {
        const cardWidth = productCards[0].offsetWidth + 24; // Adjust according to product-card css margin 8*2=16 (margin: 0 8px;)
        const translateXValue = -(index * cardWidth);
        sliderWrapper.style.transform = `translateX(${translateXValue}px)`;

        if (index < productCards.length - 5) {
            sliderWrapper.style.transform += `translateX(-${cardWidth * 0.4}px)`;
        }

        currentIndex = index;
    }

    function nextSlide() {
        if (currentIndex < productCards.length - 5) {
            slideTo(currentIndex + 1);
        } else {
            slideTo(0);
        }
    }

    function prevSlide() {
        if (currentIndex > 0) {
            slideTo(currentIndex - 1);
        } else {
            slideTo(productCards.length - 5);
        }
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 3000); // Adjust interval as needed
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    sliderWrapper.addEventListener('mouseover', stopAutoSlide);
    sliderWrapper.addEventListener('mouseout', startAutoSlide);

    startAutoSlide();
    slideTo(0); // Start with the first card showing
});


// got to top btn js start 
document.addEventListener("DOMContentLoaded", function () {
    const scrollBtn = document.getElementById("scrollBtn");
    const progressBorder = document.getElementById("progressBorder");

    // Show or hide button based on scroll position
    window.onscroll = function () {
        toggleScrollButton();
        updateProgress();
    };

    // Scroll to top smoothly
    scrollBtn.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };

    function toggleScrollButton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    }

    function updateProgress() {
        const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercentage = (scrollPosition / windowHeight) * 100;

        // Update the border based on the scroll percentage
        progressBorder.style.borderColor = `rgba(255, 255, 255, ${scrollPercentage / 100})`;
        progressBorder.style.borderWidth = `${scrollPercentage / 4}px`;
    }
});






