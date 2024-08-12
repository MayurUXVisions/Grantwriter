jQuery(document).ready(function (e) {

  jQuery(".faqs__title").click(function() {
    // Get the associated .faqs__box for the clicked title
    var $faqsBox = jQuery(this).closest('.faqs__box');

    // Slide up all other .faqs__text elements and remove active class from their boxes
    jQuery(".faqs__text").not(jQuery(this).next()).slideUp().each(function() {
        jQuery(this).closest('.faqs__box').removeClass('faq-active');
    });

    // Slide down the clicked .faqs__text element
    jQuery(this).next(".faqs__text").slideToggle(function() {
        // Check if this .faqs__text is visible
        if (jQuery(this).is(":visible")) {
            // Add active class to the corresponding .faqs__box
            $faqsBox.addClass('faq-active');
        } else {
            // Remove active class if this .faqs__text is hidden
            $faqsBox.removeClass('faq-active');
        }
    });
});


/* Custom Scroll Bar */
(function($){
  jQuery(window).on("load",function(){
    
    jQuery("#scrollbar").mCustomScrollbar({});
    
  });
})(jQuery);
/* Custom Scroll Bar */


setTimeout(function() { 
  AOS.init({
    once: true,
    duration: 800,
    offset: 220,
  });
}, 200);

jQuery('.wp-block-media-text__content').attr('data-aos', 'fade-up');
jQuery('.wp-block-media-text__media').attr('data-aos', 'fade-up');


});

if (jQuery('#counter').length) {
    var mapcounted = 0;
    jQuery(window).scroll(function() {
      var MapoTop = jQuery('#counter').offset().top - window.innerHeight;
      if (mapcounted == 0 && jQuery(window).scrollTop() > MapoTop) {
    
        console.log(MapoTop);
    
        jQuery('.number span').each(function () {
          var $this = jQuery(this);
          jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.ceil(this.Counter));
            }
          });
        });
        mapcounted = 1;
      }
    });
}


/* Trusted Logo */
let SwiperTop = new Swiper('.trustedSwiper', {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 5000,
    autoplay: {
      delay: 0,
    },
    loop: true,
    slidesPerView:'auto',
    allowTouchMove: false
});

 
/* Footer Marquee */
let FooterSwiperTop = new Swiper('.footer-marquee', {
  spaceBetween: 0,
  centeredSlides: true,
  speed: 5000,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  loop: true,
  slidesPerView:'auto',
  allowTouchMove: false
});


/* Grant Alerts */
var carouselslider = new Swiper('.carousel-slider', {
  spaceBetween: 0,
  slidesPerView: 4,
  centeredSlides: false,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  loop: true,
  breakpoints: {
    1024: {
      slidesPerView: 3
    },
    768: {
      slidesPerView: 2
    },
    640: {
      slidesPerView: 1
    },
    320: {
      slidesPerView: 1
    }
  }
});

/* Wins Slider */
var carouselslider = new Swiper('.client_wins-slider', {
  spaceBetween: 0,
  slidesPerView: 4,
  centeredSlides: false,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  loop: true,
  breakpoints: {
    1024: {
      slidesPerView: 4
    },
    768: {
      slidesPerView: 2
    },
    640: {
      slidesPerView: 1
    },
    320: {
      slidesPerView: 1
    }
  }
});


/* Grant Alerts */
var carouselslider = new Swiper('.clientExp-slider', {
  spaceBetween: 0,
  slidesPerView: 'auto',
  centeredSlides: false,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  loop: true
});


/* Grant Alerts */

var swiper = new Swiper(".card-carousel", {
  effect: "cards",
  grabCursor: true,
  initialSlide: 0,
  speed: 500,
  loop: true,
  rotate: false,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  loop: true
});


function adjustContentMargin() {
  // Get the footer element
  var footer = document.getElementById('footer');
  
  // Get the height of the footer
  var footerHeight = footer.offsetHeight;
  
  // Get the content element
  var content = document.getElementById('page');
  
  // Add margin to the bottom of the content element equal to the footer's height
  content.style.marginBottom = footerHeight + 'px';
}

// Adjust margin on initial load
document.addEventListener("DOMContentLoaded", adjustContentMargin);

// Adjust margin on window resize
window.addEventListener("resize", adjustContentMargin);