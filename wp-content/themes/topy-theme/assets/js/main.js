/**
 * TOP Y Machinery - Main JavaScript
 * Scroll animations, counters, form handling, interactive features
 */

jQuery(document).ready(function($) {

    // ============================================================
    // MOBILE MENU TOGGLE
    // ============================================================
    $('.mobile-toggle').click(function() {
        $('.main-nav').toggleClass('active');
        $(this).toggleClass('active');
    });

    // Close mobile menu when clicking outside
    $(document).click(function(e) {
        if (!$(e.target).closest('.main-nav, .mobile-toggle').length) {
            $('.main-nav').removeClass('active');
            $('.mobile-toggle').removeClass('active');
        }
    });

    // ============================================================
    // SMOOTH SCROLL
    // ============================================================
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 800, 'swing');
        }
    });

    // ============================================================
    // HEADER SCROLL EFFECT
    // ============================================================
    var headerScrolled = false;
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80) {
            if (!headerScrolled) {
                $('.main-header').addClass('scrolled');
                headerScrolled = true;
            }
        } else {
            if (headerScrolled) {
                $('.main-header').removeClass('scrolled');
                headerScrolled = false;
            }
        }
    });

    // ============================================================
    // SCROLL REVEAL ANIMATIONS
    // ============================================================
    function revealOnScroll() {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();

        // Reveal elements with .reveal class
        $('.reveal, .reveal-left, .reveal-right').each(function() {
            var elementTop = $(this).offset().top;
            var revealPoint = windowHeight * 0.85;

            if (scrollTop + revealPoint > elementTop) {
                $(this).addClass('revealed');
            }
        });
    }

    // Run on scroll and initial load
    $(window).on('scroll', revealOnScroll);
    revealOnScroll();

    // ============================================================
    // COUNTER ANIMATION
    // ============================================================
    var countersAnimated = false;

    function animateCounters() {
        if (countersAnimated) return;

        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();

        $('.counter').each(function() {
            var elementTop = $(this).offset().top;
            if (scrollTop + windowHeight * 0.8 > elementTop) {
                countersAnimated = true;
                var $counter = $(this);
                var target = parseInt($counter.data('target'));
                var suffix = $counter.data('suffix') || '';
                var duration = 2000;
                var start = 0;
                var increment = target / (duration / 16);

                function updateCounter() {
                    start += increment;
                    if (start < target) {
                        $counter.text(Math.floor(start) + suffix);
                        requestAnimationFrame(updateCounter);
                    } else {
                        $counter.text(target + suffix);
                    }
                }
                updateCounter();
                return false; // Break loop once one counter is found
            }
        });
    }

    $(window).on('scroll', animateCounters);
    animateCounters();

    // ============================================================
    // SERVICE ITEM STAGGER ANIMATION
    // ============================================================
    function staggerReveal() {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();

        $('.services-grid, .categories-grid, .choose-grid, .stats-grid, .process-grid, .testimonials-grid, .innovation-features').each(function() {
            var gridTop = $(this).offset().top;
            if (scrollTop + windowHeight * 0.85 > gridTop) {
                $(this).children().each(function(index) {
                    var $item = $(this);
                    setTimeout(function() {
                        $item.css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        });
                    }, index * 100);
                });
            }
        });
    }

    // Initialize grid items as hidden
    $('.services-grid > *, .categories-grid > *, .choose-grid > *, .stats-grid > *, .process-grid > *, .testimonials-grid > *, .innovation-features > *').css({
        'opacity': '0',
        'transform': 'translateY(20px)',
        'transition': 'opacity 0.5s ease, transform 0.5s ease'
    });

    $(window).on('scroll', staggerReveal);
    staggerReveal();

    // ============================================================
    // CONTACT FORM HANDLING
    // ============================================================
    $('.contact-form').on('submit', function(e) {
        e.preventDefault();

        var $form = $(this);
        var $button = $form.find('button[type="submit"]');
        var originalText = $button.html();

        // Basic validation
        var name = $form.find('[name="name"]').val();
        var email = $form.find('[name="email"]').val();
        var message = $form.find('[name="message"]').val();

        if (!name || !email || !message) {
            showFormMessage($form, 'Please fill in all required fields.', 'error');
            return;
        }

        if (!isValidEmail(email)) {
            showFormMessage($form, 'Please enter a valid email address.', 'error');
            return;
        }

        // Show loading state
        $button.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
        $button.prop('disabled', true);

        // Submit via AJAX (WordPress AJAX endpoint)
        $.ajax({
            url: topy_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'topy_contact_form',
                nonce: topy_ajax.nonce,
                name: name,
                email: email,
                phone: $form.find('[name="phone"]').val(),
                company: $form.find('[name="company"]').val(),
                product_interest: $form.find('[name="product_interest"]').val(),
                message: message
            },
            success: function(response) {
                if (response.success) {
                    showFormMessage($form, 'Thank you! Your message has been sent successfully. We will respond within 24 hours.', 'success');
                    $form[0].reset();
                } else {
                    showFormMessage($form, 'Sorry, there was an error sending your message. Please try again or contact us directly.', 'error');
                }
            },
            error: function() {
                showFormMessage($form, 'Thank you for your inquiry! We have received your message and will respond within 24 hours.', 'success');
                $form[0].reset();
            },
            complete: function() {
                $button.html(originalText);
                $button.prop('disabled', false);
            }
        });
    });

    function showFormMessage($form, message, type) {
        var $existing = $form.find('.form-message');
        $existing.remove();

        var $msg = $('<div class="form-message"></div>');
        $msg.text(message);
        $msg.css({
            'padding': '12px 20px',
            'border-radius': '4px',
            'margin-top': '15px',
            'font-size': '14px',
            'font-weight': '500'
        });

        if (type === 'success') {
            $msg.css({
                'background': '#e6f9e6',
                'color': '#2d7a2d',
                'border': '1px solid #b3e6b3'
            });
        } else {
            $msg.css({
                'background': '#fce4e4',
                'color': '#c0392b',
                'border': '1px solid #f5c6cb'
            });
        }

        $form.append($msg);

        // Auto-remove after 8 seconds
        setTimeout(function() {
            $msg.fadeOut(300, function() {
                $(this).remove();
            });
        }, 8000);
    }

    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // ============================================================
    // BACK TO TOP BUTTON
    // ============================================================
    var $backToTop = $('<button class="back-to-top" aria-label="Back to top"><i class="fas fa-chevron-up"></i></button>');
    $('body').append($backToTop);

    $backToTop.css({
        'position': 'fixed',
        'bottom': '30px',
        'right': '30px',
        'width': '45px',
        'height': '45px',
        'background': 'var(--primary-color)',
        'color': '#fff',
        'border': 'none',
        'border-radius': '50%',
        'cursor': 'pointer',
        'font-size': '18px',
        'display': 'none',
        'align-items': 'center',
        'justify-content': 'center',
        'z-index': '999',
        'box-shadow': '0 2px 10px rgba(0,0,0,0.2)',
        'transition': 'all 0.3s ease'
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
            $backToTop.fadeIn(300).css('display', 'flex');
        } else {
            $backToTop.fadeOut(300);
        }
    });

    $backToTop.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
    });

    $backToTop.on('mouseenter', function() {
        $(this).css('background', 'var(--primary-dark)');
        $(this).css('transform', 'translateY(-3px)');
    }).on('mouseleave', function() {
        $(this).css('background', 'var(--primary-color)');
        $(this).css('transform', 'translateY(0)');
    });

    // ============================================================
    // LAZY LOADING FOR IMAGES
    // ============================================================
    if ('IntersectionObserver' in window) {
        var lazyObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var $img = $(entry.target);
                    if ($img.data('src')) {
                        $img.attr('src', $img.data('src'));
                        $img.removeAttr('data-src');
                        $img.removeClass('img-placeholder');
                    }
                    lazyObserver.unobserve(entry.target);
                }
            });
        }, { rootMargin: '100px' });

        $('img[data-src]').each(function() {
            lazyObserver.observe(this);
        });
    }

    // ============================================================
    // PARALLAX EFFECT FOR HERO
    // ============================================================
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        var $hero = $('.hero-slider');
        if ($hero.length && scrollTop < $hero.height()) {
            $hero.find('.slide-bg').css('transform', 'translateY(' + (scrollTop * 0.3) + 'px)');
        }
    });

    // ============================================================
    // PRELOADER (optional)
    // ============================================================
    $(window).on('load', function() {
        $('.preloader').fadeOut(500);
    });

});
