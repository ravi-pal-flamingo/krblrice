$(document).ready(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 60) {
            $('header').addClass("active");
        } else {
            $('header').removeClass("active");
        }
    });
    $(".burger-menu").click(function(){
        $(".shadow-bg").addClass("active");
        $(".header-nav-colm").addClass("active");
        $("body").addClass("overflow-hidden");
      });
      $(".shadow-bg").click(function(){
        $(".header-nav-colm").removeClass("active");
        $(this).removeClass("active");
        $("body").removeClass("overflow-hidden");
      });
      $(".close-nav").click(function(){
        $(".header-nav-colm").removeClass("active");
        $(".shadow-bg").removeClass("active");
        $("body").removeClass("overflow-hidden");
      });
      $('.dropdowen-arrow-v').click(function () {
        $(this).parent(".nav-item-v").toggleClass('active').siblings(".nav-item-v").removeClass("active");
      });

      $('.searchbtn').click(function(){
        $('.search-nav, .search-bg-layer').toggleClass('show');
        $('body').addClass("overflow-hidden");
    
    });
    $('.search-bg-layer').click(function(){
        $('.search-nav, .search-bg-layer').removeClass('show');
        $('body').removeClass("overflow-hidden");
    });
    $('.dropdowen-icon').click(function () {
      $(this).parent().parent(".nav-item").toggleClass('active').siblings(".nav-item").removeClass("active");
  });

  
  const swiperBanner = new Swiper('.banner', {
    slidesPerView: '1',
    spaceBetween: 0,
    pagination: {
        el: '.banner .swiper-pagination',
        clickable: true,
      },
      // navigation: {
      //   nextEl: '.banner .swiper-button-next',
      //   prevEl: '.banner .swiper-button-prev',
      // },
      autoplay: {
        delay: 50000000000000000,
        pauseOnMouseEnter: false,
      }
  });

// swiperBanner.el.addEventListener('mouseenter', function() {
//  swiper.autoplay.stop();
// });

// swiperBanner.el.addEventListener('mouseleave', function() {
//   swiper.autoplay.start();
// });

const mediaQuery = window.matchMedia('(min-width: 481px)')
if (mediaQuery.matches) {
 new Swiper('.about-timeline-slide', {
    navigation: {
      nextEl: '.about-timeline-slide .swiper-button-next',
      prevEl: '.about-timeline-slide .swiper-button-prev',
    },
    breakpoints: {
      300: {
        slidesPerView: 2,
        spaceBetween: 15
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 15
      },
      1052: {
        slidesPerView: 5,
        spaceBetween: 15
      }
    }
});

}

$('.tab-menu-list li a').on('click', function(){
  var target = $(this).attr('data-rel');
  $('.tab-menu-list li a').removeClass('active');
    $(this).addClass('active');
    $("#"+target).fadeIn('slow').siblings(".tab-output-box").hide();
    return false;
});

const mediaQuerymobile = window.matchMedia('(max-width: 767px)')
if (mediaQuerymobile.matches) {
 new Swiper('.filed_slider', {
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },
    breakpoints: {
      300: {
        slidesPerView: 1.4,
        spaceBetween: 15
      },
      480: {
        slidesPerView: 1.6,
        spaceBetween: 15
      }
    }
});

}

if(window.matchMedia("(max-width: 481px)").matches){
  $('.toggle-timeline').click(function() {
    $('.about-timeline-slide').toggleClass("all_timeline_show");
    if ($('.view-more-timline').text() === "View More") {
      $(".view-more-timline").text("View Less")
    } else {
      $(".view-more-timline").text("View More")
    }
  });
}





var news_swiper_thumbs = new Swiper(".news_swiper_thumbs", {
  spaceBetween: 20,
  slidesPerView: 4,
  navigation: {
    nextEl: ".news_swiper_thumbs .swiper-button-next",
    prevEl: ".news_swiper_thumbs .swiper-button-prev",
  },
  breakpoints: {
    767: {
      slidesPerView: 2,
      spaceBetween: 15
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 15
    }
  }
  
});

var news_swiper = new Swiper(".news_swiper", {
  spaceBetween: 10,
  slidesPerView: 1,
  thumbs: {
    swiper: news_swiper_thumbs,
  }, 
  pagination: {
    el: '.pagination-news',
    clickable: true,
  }

});


jQuery('.youtubeOverlay').click(function() {
  jQuery('.youtubeOverlay').fadeOut(1000);
  var vidId = jQuery(this).attr('id');
  jQuery('.player').html('<iframe id="player_' + vidId + '" width="960" height="540" src="https://www.youtube.com/embed/' + vidId + '?enablejsapi=1&amp;rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1" allow="autoplay" frameborder="0" allowfullscreen></iframe>');
  new YT.Player('player_' + vidId, {
    events: {
      'onStateChange': onPlayerStateChange,
    }
  });
  function onPlayerStateChange(event) {
    if (event.data === 0) {
      jQuery('.youtubeOverlay').fadeIn(1000);
    }
  }
});




});

