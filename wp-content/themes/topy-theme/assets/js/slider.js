/**
 * TOP Y Machinery - Hero Slider
 */

jQuery(document).ready(function($) {
    let currentSlide = 0;
    const slides = $('.slide');
    const dots = $('.slider-dot');
    const totalSlides = slides.length;
    
    function goToSlide(index) {
        slides.removeClass('active');
        dots.removeClass('active');
        
        currentSlide = index;
        if (currentSlide >= totalSlides) currentSlide = 0;
        if (currentSlide < 0) currentSlide = totalSlides - 1;
        
        slides.eq(currentSlide).addClass('active');
        dots.eq(currentSlide).addClass('active');
    }
    
    // Auto play
    let slideInterval = setInterval(function() {
        goToSlide(currentSlide + 1);
    }, 5000);
    
    // Dot click
    dots.click(function() {
        clearInterval(slideInterval);
        goToSlide($(this).data('slide'));
        slideInterval = setInterval(function() {
            goToSlide(currentSlide + 1);
        }, 5000);
    });
    
    // Arrow click
    $('.slider-prev').click(function() {
        clearInterval(slideInterval);
        goToSlide(currentSlide - 1);
        slideInterval = setInterval(function() {
            goToSlide(currentSlide + 1);
        }, 5000);
    });
    
    $('.slider-next').click(function() {
        clearInterval(slideInterval);
        goToSlide(currentSlide + 1);
        slideInterval = setInterval(function() {
            goToSlide(currentSlide + 1);
        }, 5000);
    });
});
