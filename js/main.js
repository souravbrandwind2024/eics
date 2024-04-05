$( document ).ready(function() {

                // Menu-on-hover-area-start //
                $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
                    if ($(window).width() > 750) {
                        var _d = $(e.target).closest('.nav-item');
                        _d.addClass('show');
                        setTimeout(function () {
                            _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                        }, 1);
                    }
                });
    
             // Menu-on-hover-area-end //
    
             // Dropdown-area-start //
                $('.dropdown-menu a.dropdown-toggle').click(function (e) {
                    if (!$(this).next().hasClass('show')) {
                        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                    }
                    var $subMenu = $(this).next(".dropdown-menu");
                    $subMenu.toggleClass('show');
        
        
                    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                        $('.dropdown-submenu .show').removeClass("show");
                    });
                    return false;
                });
            // Dropdown-area-end //


// home-pagebanner-area-start //
$(".embed-responsive iframe").addClass("embed-responsive-item");
$(".carousel-inner .item:first-child").addClass("active");

$('[data-toggle="tooltip"]').tooltip();
// home-pagebanner-area-end //

// scroll-to-top-area-start //
    var scrollTop = $(".scrollTop");
      $(window).scroll(function () {
      $(this).scrollTop() > 100 ? $(scrollTop).css("opacity", "1") : $(scrollTop).css("opacity", "0")
        }),
     $(scrollTop).click(function () {
      return $("html, body").animate({
        scrollTop: 0
         }, 800),
        !1
      });
        
// scroll-to-top-area-end //

// Testimonial-area-start //
   $('.testimonial ').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: true,
                autoplay: 8500,
                smartSpeed: 4500,
                responsive:{
                    0:{
                        items:1,
                        navigation : true,
                    },
                    600:{
                        items:2,
                        navigation : true,
                    },
                    1000:{
                        items:3,
                        navigation : true,
                    }
                }
    });
// Testimonial-area-end //


// sticky-header-area-start //
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('#menu-area').addClass("sticky");
    } else {
        $('#menu-area').removeClass("sticky");
    }
});
// sticky-header-area-end //


 // footer-bottom-year-area-start //
 const yearEl = document.querySelector('.year');
 let date = new Date();
 
 yearEl.innerText = date.getFullYear();
 // footer-bottom-year-area-end //
 

});


  // gallery-area-start //
$(document).ready(function() {
    $('.gallerysection').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: true
        },
       
        
    });
});
  // gallery-area-end //

// mock-question-set-hide-&-show-area-start //
//   $('#show-hidden-menu').click(function() {
//     $('.hidden-menu').slideToggle("slow");
//   });
$('.first-data').hide()
jQuery('.first-btn').on('click',function(){
  jQuery('.first-data').toggle();
})

$('.second-data').hide()
jQuery('.second-btn').on('click',function(){
  jQuery('.second-data').toggle();
})

$('.third-data').hide()
jQuery('.third-btn').on('click',function(){
  jQuery('.third-data').toggle();
})

$('.fourth-data').hide()
jQuery('.fourth-btn').on('click',function(){
  jQuery('.fourth-data').toggle();
})

$('.five-data').hide()
jQuery('.five-btn').on('click',function(){
  jQuery('.five-data').toggle();
})

$('.six-data').hide()
jQuery('.six-btn').on('click',function(){
  jQuery('.six-data').toggle();
})

$('.seven-data').hide()
jQuery('.seven-btn').on('click',function(){
  jQuery('.seven-data').toggle();
})

$('.eight-data').hide()
jQuery('.eight-btn').on('click',function(){
  jQuery('.eight-data').toggle();
})

$('.nine-data').hide()
jQuery('.nine-btn').on('click',function(){
  jQuery('.nine-data').toggle();
})

$('.ten-data').hide()
jQuery('.ten-btn').on('click',function(){
  jQuery('.ten-data').toggle();
})
// mock-question-set-hide-&-show-area-end //
