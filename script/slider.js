var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 0,
    mousewheel: {
      sensitivity: 0
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    speed: 900,
    //loop: true,
    on: {
      init: function(){
        $('.swiper-slide-active').addClass('transitioned')
      }
    }
  });
  
  var previous = swiper.activeIndex;
  
  swiper.on('slideNextTransitionStart', function() {
    $('.transitioned').addClass('animate-up')
    $('.swiper-slide').removeClass('transitioned');
  })
  
  swiper.on('slidePrevTransitionStart', function() {
    $('.transitioned').addClass('animate-down')
    $('.swiper-slide').removeClass('transitioned');
  })
  
  swiper.on('transitionEnd', function() {
    $('.swiper-slide').removeClass('animate-up animate-down')
    $('.swiper-slide-active').addClass('transitioned')
  })