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
    duration: 400,
    offset: 220,
  });
}, 200);

//jQuery('.wp-block-media-text__content').attr('data-aos', 'fade-up');
//jQuery('.wp-block-media-text__media img').attr('class', 'animate-image');


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
    spaceBetween: 20,
    centeredSlides: true,
    freeMode: true,
    speed: 4000,
    loopAddBlankSlides:true,
    autoplay: {
      delay: 0,
      disableOnInteraction:false,
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
  centeredSlides: false,
  speed: 5000,
  autoplay: {
    delay: 0, 
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
      slidesPerView:'auto'
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
var winscarouselslider = new Swiper('.client_wins-slider', {
  spaceBetween: 0,
  slidesPerView: 4,
  centeredSlides: false,
  speed: 5000,
  autoplay: {
    delay: 0,
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


/* Client Stories Slider */
var storiescarouselslider = new Swiper('.client-stories-slider', {
  spaceBetween: 0,
  slidesPerView: 3,
  centeredSlides: false,
  autoplay: {
    delay: 5000,
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
var expcarouselslider = new Swiper('.clientExp-slider', {
  spaceBetween: 0,
  slidesPerView: 'auto', 
  centeredSlides: false,
  speed: 5000,
  autoplay: {
    delay: 0,
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
  allowTouchMove: false
});



/* Subscribe & Never miss */

jQuery(".checkout-btn").click(function(){
  setTimeout(function () {
    swiper.slideTo(4);
  }, 175);
})

jQuery(".back-to-first").click(function(){
  setTimeout(function () {
    swiper.slideTo(0);
  }, 175);
})

var swiper = new Swiper(".card-carousel", {
  effect: "cards",
  grabCursor: true,
  initialSlide: 0,
  speed: 500,
  loop: true,
  rotate: false,
  allowTouchMove: false,
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


/* Footer Dynamic Margin */
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



/* Search Active Code */
const searchFields = document.querySelectorAll('.search-field');

searchFields.forEach(function(field) {
  // Add the 'active' class to the parent 'search-form' when the search field gains focus
  field.addEventListener('focus', function() {
    field.closest('.search-form').classList.add('search-active');
  });

  // Remove the 'active' class from the parent 'search-form' when the search field loses focus
  field.addEventListener('blur', function() {
    field.closest('.search-form').classList.remove('search-active');
  });
}); 




// Select all elements with the class 'animate-image'
const images = document.querySelectorAll('.animate-image');

// Function to update the scale based on scroll
const updateScaleOnScroll = () => {
  images.forEach(image => {
    const rect = image.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Calculate the visible percentage of the image
    const visibleRatio = Math.max(0, Math.min(1, (windowHeight - rect.top) / windowHeight));

    // Map the visible percentage to scale values (from 1.4 to 1)
    const scaleValue = 1.4 - (visibleRatio * 0.4);

    // Apply the scale transformation
    image.style.transform = `scale3d(${scaleValue}, ${scaleValue}, ${scaleValue})`;
  });
};

// Add scroll event listener
window.addEventListener('scroll', updateScaleOnScroll);

// Initial call to set scale on page load
updateScaleOnScroll();




/* Services Block Hover Code */
document.addEventListener('DOMContentLoaded', function () {
  const serviceItems = document.querySelectorAll('.service-list-rp');
  const thirdChild = serviceItems[2]; // Select the third child

  // Function to remove active class from all items
  function removeActiveClasses() {
      serviceItems.forEach(item => {
          item.classList.remove('service-active');
      });
  }

  // Set the third child active by default
  thirdChild.classList.add('service-active');

  // Add hover event listeners to each item
  serviceItems.forEach((item, index) => {
      item.addEventListener('mouseover', function () {
          removeActiveClasses(); // Remove active class from all items
          item.classList.add('service-active'); // Add active class to the hovered item
      });

      item.addEventListener('mouseleave', function () {
          removeActiveClasses(); // Remove active class from all items
          thirdChild.classList.add('service-active'); // Reapply active class to the third child
      });
  });
});



/* clientExp Code */
document.addEventListener('DOMContentLoaded', function () {
  const clientExpBoxes = document.querySelectorAll('.clientExp__box');
  const backgroundImg = document.querySelector('#background-img');

  clientExpBoxes.forEach(box => {
      box.addEventListener('mouseover', function () {
          const imgElement = box.querySelector('.clientExp__real-img');
          if (imgElement) {
              const imgSrc = imgElement.getAttribute('src');
              
              // Check if the hovered image is different from the current background image
              if (imgSrc && imgSrc.trim() !== '' && imgSrc !== backgroundImg.getAttribute('src')) {
                  // Fade out the current image
                  backgroundImg.style.opacity = 0;

                  // Wait for the fade-out to complete before changing the src
                  setTimeout(() => {
                      backgroundImg.setAttribute('src', imgSrc);

                      // Ensure the image has loaded before fading in
                      backgroundImg.onload = () => {
                          backgroundImg.style.opacity = 1; // Fade in the new image
                      };
                  }, 500); // Match this duration to the CSS transition duration
              }
          }
      });
  });
});


