$(document).ready(function () {
    // Initialize portfolio grid
    var $grid = $('.portfolio-grid').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows',
        fitRows: {
            gutter: 0
        },
        percentPosition: true,
        transitionDuration: '0.6s',
        stagger: 50
    });    // Filter items on button click
    $('.filter-btn').on('click', function () {
        var filterValue = $(this).attr('data-filter');
        $(this).addClass('active').siblings().removeClass('active');

        $grid.isotope({
            filter: filterValue,
            transitionDuration: 450,
            hiddenStyle: {
                opacity: 0,
                transform: 'scale(0.9)'
            },
            visibleStyle: {
                opacity: 1,
                transform: 'scale(1)'
            }
        });
    });

    // Layout Isotope after all images have loaded
    $grid.imagesLoaded().progress(function () {
        $grid.isotope('layout');
    });

    // Trigger layout after any images load
    $('.portfolio-item img').on('load', function () {
        $grid.isotope('layout');
    });

    // Handle filter clicks
    $('.filter-btn').on('click', function () {
        let filterValue = $(this).attr('data-filter');

        // Update active state of buttons
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        // Filter items
        $grid.isotope({ filter: filterValue });
    });

    // Smooth scrolling for navigation links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        const target = $($(this).attr('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 70
            }, 800);
        }
    });

    // Fade in animations on scroll
    function checkFade() {
        $('.fade-in').each(function () {
            const elementTop = $(this).offset().top;
            const viewportBottom = $(window).scrollTop() + $(window).height();

            if (elementTop < viewportBottom - 100) {
                $(this).addClass('visible');
            }
        });
    }

    // Check fade elements on load and scroll
    checkFade();
    $(window).scroll(checkFade);

    // Skills data
    const skills = [
        { name: 'HTML/CSS', icon: 'fa-code' },
        { name: 'JavaScript', icon: 'fa-js' },
        { name: 'React', icon: 'fa-react' },
        { name: 'Node.js', icon: 'fa-node-js' },
        { name: 'Git', icon: 'fa-git-alt' },
        { name: 'Database', icon: 'fa-database' }
    ];

    // Populate skills section
    const skillsContainer = $('#skills .row');
    skills.forEach(skill => {
        skillsContainer.append(`
            <div class="col-6 col-md-4 col-lg-2 text-center fade-in">
                <div class="skill-icon">
                    <i class="fab ${skill.icon} fa-2x"></i>
                </div>
                <h5>${skill.name}</h5>
            </div>
        `);
    });

    // Form submission handling
    $('.contact-form').on('submit', function (e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Form submitted! (Demo only)');
    });

    // Remove old Bootstrap navbar scroll handler
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > 50) {
    //         $('.navbar').addClass('bg-black');
    //     } else {
    //         $('.navbar').removeClass('bg-black');
    //     }
    // });

    // Ensure sticky-blur is toggled on .custom-navbar only
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.custom-navbar').addClass('sticky-blur');
        } else {
            $('.custom-navbar').removeClass('sticky-blur');
        }
    });    // Initialize Swiper for testimonials
    const testimonialsSwiper = new Swiper('.testimonials-slider', {
        slidesPerView: 3,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        centeredSlides: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });
});

// Navigation Toggle
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navLinks.classList.toggle('active');
    });

    // Close mobile menu when clicking a nav link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navToggle.classList.remove('active');
            navLinks.classList.remove('active');
        });
    });

    // Add background to navbar on scroll
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.custom-navbar');
        if (window.scrollY > 50) {
            navbar.style.padding = '0.5rem 0';
            navbar.style.background = 'rgba(10, 11, 26, 0.98)';
        } else {
            navbar.style.padding = '1rem 0';
            navbar.style.background = 'rgba(10, 11, 26, 0.95)';
        }
    });
});

// Navbar sticky blur effect on scroll
$(window).on('scroll', function () {
    if ($(window).scrollTop() > 10) {
        $('.custom-navbar').addClass('sticky-blur');
    } else {
        $('.custom-navbar').removeClass('sticky-blur');
    }
});

// Enhanced sticky navbar effect
$(window).on('scroll', function () {
    const scrollTop = $(window).scrollTop();
    const navbar = $('.custom-navbar');

    if (scrollTop > 20) {
        navbar.addClass('sticky-blur');
    } else {
        navbar.removeClass('sticky-blur');
    }
});

// Smart scroll navbar
let lastScrollTop = 0;
const navbar = $('.custom-navbar');
const scrollThreshold = 100; // Amount of scroll before hiding navbar

$(window).on('scroll', function () {
    const scrollTop = $(window).scrollTop();

    // Add sticky blur effect
    if (scrollTop > 20) {
        navbar.addClass('sticky-blur');
    } else {
        navbar.removeClass('sticky-blur');
    }

    // Handle navbar show/hide based on scroll direction
    if (scrollTop > scrollThreshold) { // Only hide/show after scrolling past threshold
        if (scrollTop > lastScrollTop && !navbar.hasClass('nav-hidden')) {
            // Scrolling down & navbar visible -> hide it
            navbar.addClass('nav-hidden');
        } else if (scrollTop < lastScrollTop && navbar.hasClass('nav-hidden')) {
            // Scrolling up & navbar hidden -> show it
            navbar.removeClass('nav-hidden');
        }
    } else {
        // Above threshold -> always show navbar
        navbar.removeClass('nav-hidden');
    }

    lastScrollTop = scrollTop;
});

// Trigger the scroll handler on page load
$(window).trigger('scroll');

// Utility math functions
const math = {
    lerp: (a, b, n) => {
        return (1 - n) * a + n * b
    },
    norm: (value, min, max) => {
        return (value - min) / (max - min)
    }
}

const config = {
    height: window.innerHeight,
    width: window.innerWidth
}

class Smooth {
    constructor() {
        this.bindMethods()

        this.data = {
            ease: 0.1,
            current: window.pageYOffset, // Initialize with current scroll position
            last: window.pageYOffset,    // Initialize last with current scroll position
            rounded: 0
        }

        this.dom = {
            el: document.querySelector('[data-scroll]'),
            content: document.querySelector('[data-scroll-content]')
        }

        this.rAF = null
        this.init()
    }

    bindMethods() {
        ['scroll', 'run', 'resize']
            .forEach((fn) => this[fn] = this[fn].bind(this))
    }

    setStyles() {
        // Set initial transform based on current scroll position
        if (this.dom.content) {
            this.dom.content.style.transform = `translate3d(0, -${window.pageYOffset}px, 0)`
        }

        Object.assign(this.dom.el.style, {
            position: 'fixed',
            top: 0,
            left: 0,
            height: '100%',
            width: '100%',
            overflow: 'hidden'
        })
    }

    setHeight() {
        const contentHeight = this.dom.content.getBoundingClientRect().height
        document.body.style.height = `${contentHeight}px`

        // Force immediate update of scroll position
        this.data.current = window.pageYOffset
        this.data.last = window.pageYOffset
        this.data.rounded = window.pageYOffset

        // Immediately apply transform
        this.dom.content.style.transform = `translate3d(0, -${this.data.current}px, 0)`
    }

    resize() {
        this.setHeight()
        this.scroll()
    }

    preload() {
        // Wait for images to load
        const images = Array.from(document.getElementsByTagName('img'))
        const imagePromises = images.map(img => {
            return new Promise((resolve) => {
                if (img.complete) {
                    resolve()
                } else {
                    img.onload = () => resolve()
                    img.onerror = () => resolve() // Handle error but continue
                }
            })
        })

        // When all images are loaded
        Promise.all(imagePromises).then(() => {
            this.setHeight()
            // Force an immediate transform update
            this.run()
        })

        // Set initial height and position anyway
        this.setHeight()
    }

    scroll() {
        this.data.current = window.pageYOffset
    }

    run() {
        this.data.last += (this.data.current - this.data.last) * this.data.ease
        this.data.rounded = Math.round(this.data.last * 100) / 100

        const diff = this.data.current - this.data.rounded
        const acc = diff / config.width
        const velo = + acc
        const skew = velo * 5 // Reduced skew for better readability

        this.dom.content.style.transform = `translate3d(0, -${this.data.rounded}px, 0) skewY(${skew}deg)`
        this.requestAnimationFrame()
    }

    on() {
        // Set initial position immediately
        this.setStyles()
        this.setHeight()

        // Force an immediate update
        this.data.current = window.pageYOffset
        this.data.last = window.pageYOffset
        this.data.rounded = window.pageYOffset

        this.addEvents()
        this.requestAnimationFrame()
    }

    off() {
        this.cancelAnimationFrame()
        this.removeEvents()
    }

    requestAnimationFrame() {
        this.rAF = requestAnimationFrame(this.run)
    }

    cancelAnimationFrame() {
        cancelAnimationFrame(this.rAF)
    }

    destroy() {
        document.body.style.height = ''
        this.data = null
        this.removeEvents()
        this.cancelAnimationFrame()
    }

    addEvents() {
        window.addEventListener('resize', this.resize, { passive: true })
        window.addEventListener('scroll', this.scroll, { passive: true })
    }

    removeEvents() {
        window.removeEventListener('resize', this.resize, { passive: true })
        window.removeEventListener('scroll', this.scroll, { passive: true })
    }

    init() {
        requestAnimationFrame(() => {
            this.preload()
            this.on()
        })
    }
}

// Initialize smooth scroll when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Short timeout to ensure everything is ready
    setTimeout(() => {
        new Smooth()
    }, 100)
})
