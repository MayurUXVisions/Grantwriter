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