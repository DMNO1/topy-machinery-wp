/**
 * TOP Y Machinery - Main JavaScript
 */

jQuery(document).ready(function($) {
    // Mobile menu toggle
    $('.mobile-toggle').click(function() {
        $('.main-nav').toggleClass('active');
    });
    
    // Smooth scroll
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Header scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.main-header').addClass('scrolled');
        } else {
            $('.main-header').removeClass('scrolled');
        }
    });
});
