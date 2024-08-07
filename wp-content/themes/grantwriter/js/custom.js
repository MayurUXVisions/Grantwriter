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

AOS.init({
    once: true,
});


/* Trusted Logo */
let SwiperTop = new Swiper('.trustedSwiper', {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 6000,
    autoplay: {
      delay: 0,
    },
    loop: true,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true
});

 
/* Footer Marquee */
let FooterSwiperTop = new Swiper('.footer-marquee', {
  spaceBetween: 0,
  centeredSlides: true,
  speed: 6000,
  autoplay: {
    delay: 0,
  },
  loop: true,
  slidesPerView:'auto',
  allowTouchMove: false,
  disableOnInteraction: true
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

/* Grant Alerts */
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