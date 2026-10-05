"use strict";


(function ($) {
  "use strict";

  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;

    if (window_top > 50) {
      $('.scroll-to-top').addClass('reveal');
    } else {
      $('.scroll-to-top').removeClass('reveal');
    }
  });
  //  Tetsimonial 1
  $('.testimonials-slides').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    margin: 20,
    autoplayHoverPause: true,
    autoplay: true,
    center: true,
    responsiveClass: true,
    autoplayTimeout: 4000,
    navText: [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });

  //  Testimonial -2
  $('.testimonials-slides-2').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    margin: 20,
    center: true,
    autoplayHoverPause: true,
    autoplay: true,
    responsiveClass: true,
    autoplayTimeout: 4000,
    navText: [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        margin: 10,
      },
      1200: {
        items: 3
      }
    }
  });

  //  Testimonial-3
  $('.testimonials-slides-3').owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    responsiveClass: true,
    autoplayTimeout: 4000,
    center: true,
    navText: ["<i class='bi bi-arrow-left-rounded'></i>", "<i class='bi bi-arrow-right-rounded'></i>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 3
      }
    }
  });

  //  Course Slider 
  $('.course-slides').owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    center: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  });

  //  Course slider -2
  $('.course-slides-list').owlCarousel({
    loop: true,
    dots: true,
    nav: false,
    margin: 10,
    autoplayHoverPause: true,
    autoplay: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 3
      }
    }
  }); 
  
  // Counter

  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });

  //  Team Slider
  $('.team-slider').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplayHoverPause: true,
    autoplay: false,
    navRewind: false,
    margin: 30,
    navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  }); 
  
  // overlay search

  $('.search_toggle').on('click', function (e) {
    e.preventDefault();
    $(".search-list li").hide();
    $(".search-list").css('padding','0px');
    $("#search").val('');
    $('.search_toggle').toggleClass('active');
    $('.overlay').toggleClass('open');
    setTimeout(function () {
      $('.search-form .form-control').focus();
    }, 400);
    setTimeout(function(){
      if($('.search-wrap .overlay').hasClass('open')){
      console.log('1');
      $('body').css('overflow', 'hidden');
      }else{
          console.log('0');
        $('body').css('overflow', 'auto');
      }
    }, 200);
  });


  /* ---------------------------------------------
         course filtering
    --------------------------------------------- */

  var $course = $('.course-gallery');

  if ($.fn.imagesLoaded && $course.length > 0) {
    imagesLoaded($course, function () {
      $course.isotope({
        itemSelector: '.course-item',
        filter: '*'
      });
      $(window).trigger("resize");
    });
  }

  $('.course-filter').on('click', 'a', function (e) {
    e.preventDefault();
    $(this).parent().addClass('active').siblings().removeClass('active');
    var filterValue = $(this).attr('data-filter');
    $course.isotope({
      filter: filterValue
    });
  });

  /* ---------------------------------------------
         Contact Form
  --------------------------------------------- */

  var form = $('.contact__form'),
      message = $('.contact__msg'),
      form_data; // Success function

  function done_func(response) {
    message.fadeIn().removeClass('alert-danger').addClass('alert-success');
    message.text(response);
    setTimeout(function () {
      message.fadeOut();
    }, 2000);
    form.find('input:not([type="submit"]), textarea').val('');
  } // fail function


  function fail_func(data) {
    message.fadeIn().removeClass('alert-success').addClass('alert-success');
    message.text(data.responseText);
    setTimeout(function () {
      message.fadeOut();
    }, 2000);
  }

  form.submit(function (e) {
    e.preventDefault();
    form_data = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: form.attr('action'),
      data: form_data
    }).done(done_func).fail(fail_func);
  });


  
   /*
    * ----------------------------------------------------------------------------------------
    *  SMOTH SCROOL JS
    * ----------------------------------------------------------------------------------------
    */

   $('a.js-scroll-trigger').on('click', function (e) {
      var anchor = $(this);
      $('html, body').stop().animate({
          scrollTop: $(anchor.attr('href')).offset().top - 100
      }, 1000);
      e.preventDefault();
  });

    /* ----------------------------------------------------------- */
      /*  Fixed header
      /* ----------------------------------------------------------- */
  
      $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
          $('.site-navigation').addClass('menu_fixed animated fadeInDown');
        } else {
          $('.site-navigation').removeClass('menu_fixed animated fadeInDown');
        }
      });

      $(document).ready(function(){
        setTimeout(function(){
          $('body').removeClass('loading');
        }, 500);
        
      //JS FOR SIDEMENU 

      // $(".sidebar > ul > li > a").click(function (e) {
      //   console.log("testbn");
      //       e.preventDefault();
      //       $(".sidebar > ul > li > a").removeClass("active");
      //       $(".side-dropdown-content").slideUp();
      //       if ($(this).siblings(".side-dropdown-content").is(":visible")) {
      //           $(this).removeClass("active");
      //           $(this).siblings(".side-dropdown-content").slideUp();
      //       } else {
      //           $(this).addClass("active");
      //           $(this).siblings(".side-dropdown-content").slideDown();
      //       }
      //   });
        
        // $('.sidebar ul li a').click(function() {
        //     $('.sidebar ul li a').removeClass('current');
        //     $(this).addClass('current');
        // });
        // $('.side-dropdown-item').on('click', function(){
        //     $('.side-dropdown-item').removeClass('active');
        //     $('.side-dropdown-content').slideUp();
        //     $(this).addClass('active');   
        //     if($('.side-dropdown-item').hasClass('active')){
        //         $(this).children('.side-dropdown-content').slideDown();
        //     }
        // });


        //JS FOR LOAD MORE ITEMS
        $(".more-items").slice(0, 3).show();
        $(".loadMore").on("click", function(e){
          console.log('okk');
            e.preventDefault();
            $(".more-items:hidden").slice(0, 3).slideDown();
            if($(".more-items:hidden").length == 0) {
              $(".loadMore").text("No Content").addClass("noContent");
            }
        });

        //JS FOR LINKING DROPDOWN MENU
        jQuery(function($) {
          if ($(window).width() > 769) {
            $('.navbar .dropdown').hover(function() {
              $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

            }, function() {
              $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

            });

            $('.navbar .dropdown > a').click(function() {
              location.href = this.href;
            });

          }
        });


        //JS FOR IMG POPUP
        $(".getSrc .zoom-img").click(function(e){
            var imgsrc = $(this).siblings('img').attr('src');
            $(".img-popup-outer").show();
            $(".img-media").empty().prepend('<img src="'+imgsrc+'">');
        });
        $(".img-popup-outer .zoom-img, .img-popup-outer").click(function () { 
            $(".img-popup-outer").hide();
        });
        $('.img-popup-outer').on('click', '.img-media', function(e){
            e.stopPropagation()
        });
        //JS FOR FAQ 
        $('.ques-ans-item-list:first-child .ques-ans-item .erp-question-title').addClass('open');
        $('.ques-ans-item-list:first-child .ques-ans-item .erp-answer-content').slideDown();
        $('.erp-question-title').on('click', function() {
            if($(this).hasClass('open')) {
                $(this).siblings('.erp-answer-content').slideUp();
                $(this).removeClass('open');
            }
            else {
                $('.erp-answer-content').slideUp();
                $('.erp-question-title').removeClass('open');
                $(this).siblings('.erp-answer-content').slideToggle();
                $(this).toggleClass('open');
            }
        });

        //JS FOR SCROLL TO SECTION FOR ABOUT US PAGE
        $('.sidebar a[href^="#"], #navbarMenu ul a[href^="#"]').on('click',function (e) {
          e.preventDefault();
          var target = this.hash;
          var $target = $(target);
          $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 125
          }, 50, 'swing', function () {
          });
        });

        // $('#navbarMenu ul a[href^="#"]').on('click',function (e) {
        //   e.preventDefault();
        //   var target = this.hash;
        //   var $target = $(target);
        //   $('html, body').stop().animate({
        //     'scrollTop': $target.offset().top - 350
        //   }, 900, 'swing', function () {
        //   });
        // });


        // For read more and read less
        /* $("body").on("click", ".read-more", function () {
          $(this).addClass("d-none");
          $(this).parent(".teaser").addClass("d-none");
          $(".complete").removeClass("d-none");
          $(".read-less").removeClass("d-none");
        });
        
        $("body").on("click", ".read-less", function () {
          $(this).addClass("d-none");
          $(this).parent(".complete").addClass("d-none");
          $(".teaser").removeClass("d-none");
          $(".read-more").removeClass("d-none");
        });
        */


        //JS FOR READ MORE AND READ LESS CONTENT
        var showChar = 395;  // How many characters are shown by default
        var ellipsestext = "";
        var moretext = "Read More";
        var lesstext = "Read Less";


        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext+'&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<span class="read-more-btn"><a href="" class="btn btn-main morelink">' + moretext + '</a></span></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            $(this).parents('.more').toggleClass('more-content');
            if($(this).hasClass("less")) {
              $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().slideToggle();
            $(this).prev().slideToggle();
            return false;
        });


        // For image gallery
        $('.image-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
          }
        });

        // For print media gallery
          var $container = $(".print-media-gallery").masonry({
              itemSelector: ".print-item",
              percentPosition: true,
              columnWidth: ".grid-sizer",
              horizontalOrder: true,
          });
          $container.imagesLoaded(function () {
              $container.masonry();
          });

          $(".print-item").magnificPopup({
            delegate: 'a', 
            type: 'image',
            mainClass: "mfp-with-zoom",
            gallery: {
                enabled: true,
            },
    
            zoom: {
                enabled: true,
    
                duration: 300, // duration of the effect, in milliseconds
                easing: "ease-in-out", // CSS transition easing function
            },
          });

        //JS FOR UNDER CONSTRUCTION
        /*$('.under-construction-section').show();
        $('.close-btn-cons, .under-construction-section').click(function(){
            $('.under-construction-section').hide();
        });
        jQuery('.under-construction-section').on('click', '.constr-inner-box', function(e){
            e.stopPropagation()
        });*/
      
         $('.tab-testimonial a').click(function(){
          $('.tab-testimonial a').removeClass('active');
          $(this).addClass('active');
         var getId = $(this).attr('data-target');
            $('.testi-tab-item').removeClass('active');
            $('.testi-tab-item#'+getId).addClass('active');
        });

        $('.testi-tab-item .owl-item .client-info .vplay-btn').click(function(e){
            var vdSrc = $(this).siblings('video').children('source').attr('src');
            //console.log('video src = ',vdSrc);
            $(".testiVd-popup-outer").show();
            $(".testiVd-media").empty().prepend('<video controls autoplay><source src="'+vdSrc+'"></video>');

        });
        $(".testiVd-close-btn, .testiVd-popup-outer").click(function () { 
            $(".testiVd-popup-outer").hide();
            $(".testiVd-popup video").prop("muted",true); 
        });
        jQuery('.testiVd-popup-outer').on('click', '.testiVd-media', function(e){
            e.stopPropagation()
        });
        //Js for main banner slider
        $('.banner-outer').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            items:1,
            nav: false,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        });
        //Js for client logo
        $('.client-slider').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            nav:false,
            dots: true,
            navText: [
              '<i class="fas fa-chevron-left"></i>',
              '<i class="fas fa-chevron-right"></i>',
            ],
            responsive:{
                0:{
                    items:2
                },
                400:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:5
                }
            }
        });

        //Slider for news section
        $('.sms-news-slider').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            nav:false,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            navText: [
              '<i class="fas fa-chevron-left"></i>',
              '<i class="fas fa-chevron-right"></i>',
            ],
            responsive:{
                0:{
                    items:1
                    },
                    400:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
        
        //JS FOR LIBRABRY SLIDER
        $('.library-slider').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            items:1,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                    ]
        });
        
        //JS for get contact us section
        $(function() {
            var headerHeight = $('#mainmenu-area').height();
            $('.enq-btn').on('click', function(e) {
            e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - headerHeight}, 1000, 'linear');
            });
        });

      let topHeader = $('.header-top').html();
      $('.navbar-collapse').append('<div class="header-top nav-contact">'+topHeader+'</div>');
      
      // $('.navbar-toggler').click(function(){
      //   if(!$('.navbar-collapse.collapse').hasClass('show')){
      //     $('body').css('overflow', 'hidden');
      //   }else{
      //       $('body').css('overflow', 'auto');
      //   }
      // });

    });
//  $(window).on('load',function(){
//         $('body').removeClass('loading');
//         $('#contact-modal').modal('show');
//   });

  // To show quick links in mobile view 

   if ($(window).width() < 991) {
    // For filters
    const $menu = $('.main-sidebar');

    $(document).ready(e => {
       if (!$menu.is(e.target) // if the target of the click isn't the container...
       && $menu.has(e.target).length === 0) // ... nor a descendant of the container
       {
         $menu.removeClass('toggle');
      }
     });
    
    $('#quick-one').on('click', () => {
      $menu.toggleClass('toggle');
    });
    
}
})(jQuery);

//JS FOR PROGRESS STEPS
(function($) {
  "use strict";  
  //* Form js
  function verificationForm(){
      // //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      // $(".next").click(function () {
      //     if (animating) return false;
      //     animating = true;
      //     current_fs = $(this).parent();
      //     next_fs = $(this).parent().next();
      //     //activate next step on progressbar using the index of next_fs
      //     $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
      //     //show the next fieldset
      //     next_fs.show();
      //     //hide the current fieldset with style
      //     current_fs.animate({
      //         opacity: 0
      //     }, {
      //         step: function (now, mx) {
      //             //as the opacity of current_fs reduces to 0 - stored in "now"
      //             //1. scale current_fs down to 80%
      //             scale = 1 - (1 - now) * 0.2;
      //             //2. bring next_fs from the right(50%)
      //             left = (now * 50) + "%";
      //             //3. increase opacity of next_fs to 1 as it moves in
      //             opacity = 1 - now;
      //             current_fs.css({
      //                 'transform': 'scale(' + scale + ')',
      //                 'position': 'absolute'
      //             });
      //             next_fs.css({
      //                 'left': left,
      //                 'opacity': opacity
      //             });
      //         },
      //         duration: 800,
      //         complete: function () {
      //             current_fs.hide();
      //             animating = false;
      //         },
      //         //this comes from the custom easing plugin
      //         easing: 'easeInOutBack'
      //     });
      // });

      $(".previous").click(function () {
          if (animating) return false;
          animating = true;
          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
          previous_fs.show();
          current_fs.animate({
              opacity: 0
          }, {
              step: function (now, mx) {
                  scale = 0.8 + (1 - now) * 0.2;
                  left = ((1 - now) * 50) + "%";
                  opacity = 1 - now;
                  current_fs.css({
                      'left': left
                  });
                  previous_fs.css({
                      'transform': 'scale(' + scale + ')',
                      'opacity': opacity
                  });
              },
              duration: 800,
              complete: function () {
                  current_fs.hide();
                  animating = false;
              },
              easing: 'easeInOutBack'
          });
      });
      $(".submit").click(function () {
          return false;
      })
  }; 
  //* Add Phone no select
  function phoneNoselect(){
      if ( $('#msform').length ){
          if ($("#phone").length) {
            $("#phone").intlTelInput(); 
            $("#phone").intlTelInput("setNumber", "+880"); 
          }   
      };
  }; 
  //* Select js
  function nice_Select(){
      if ( $('.product_select').length ){ 
        if ($('.select').length) {
          $('.select').niceSelect();
        }
      };
  }; 
  /*Function Calls*/  
  verificationForm ();
  phoneNoselect ();
  nice_Select ();
})(jQuery); 

$(function(){
  //JS for Cuurent Addrss
$("#sameAs").on("change", function(){
    FillAddressInput()
});

  function FillAddressInput()
  {
      let checkBox = document.getElementById('sameAs');
      let add1     = document.getElementById("add1").value;
      let city1    = document.getElementById("city1").value;
      let state1   = document.getElementById("state1").value;
      let pin1     = document.getElementById("pin1").value;
      
      if (checkBox.checked)
      {
          let add2   = document.getElementById("add2").value = add1;
          let city2  = document.getElementById("city2").value = city1;
          let state2 = document.getElementById("state2").value = state1;
          let pin2   = document.getElementById("pin2").value = pin1;
          console.log('checked');  
      }
      else
      {
          add2        = "";
          city2.value = ""; 
          state2.value = "";     
          pin2.value   = "";     
      }
  }
 
})

/*ugc*/
$('body').on('change','[name=ugc]',(e) => {
  if (e.target.value == 'yes') {
      $('#ugc_qualified').show();
  } else {
      $('#ugc_qualified').hide();
  }
});

/*phd*/
$('body').on('change','[name=phd]',(e) => {
  if (e.target.value == 'yes') {
      $('#phd').show();
      $('.phd').show();
  } else {
      $('#phd').hide();
      $('.phd').hide();
  }
});

 //JS FOR QUICK CALL
        $(".qcOpen-btn").click(function (e) {
            $(".quickCall-popup-outer").slideDown();
            $("body").css("overflow", "hidden");
        });
        $(".quickCall-close-btn").click(function () {
            $(".quickCall-popup-outer").slideUp();
            $("body").css("overflow", "auto");
        });

        // Faculty Side panel
        $("body").on("click", ".faculty-section .team-info", function () {
            $(this).parents().siblings(".faculty-desc").addClass('show-detail');
            $('body').addClass('body-overlay');
        });
        $("body").on("click", ".close-filter", function (e) {
            e.preventDefault();
            $(".faculty-desc").removeClass('show-detail');
            $('body').removeClass('body-overlay');
        });
        $(document).mouseup(function (e) {
            var container = $(".faculty-desc");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.removeClass('show-detail');
                $('body').removeClass('body-overlay');
            }
        });

/*teaching*/
$('body').on('change','[name=teaching]',(e) => {
  if (e.target.value == 'teaching') {
      $('#teaching_section').show();
      $('#non_teaching_section').hide();
      $('#other').hide();
      $('#CISCO').hide();
  } else if(e.target.value == 'other-teaching'){
      $('#other').show();
      $('#teaching_section').hide();
      $('#non_teaching_section').hide();
      $('#CISCO').hide();
  } else if(e.target.value == 'non-teaching') {
      $('#other').hide();
      $('#teaching_section').hide();
      $('#CISCO').hide();
      $('#non_teaching_section').show();
  } else {
    $('#other').hide();
    $('#teaching_section').hide();
    $('#non_teaching_section').hide();
  }
});


$(function(){
  $("[value=teaching]").trigger('click');
  $("[value=no]").trigger('click');

  $("[value=teaching]").trigger('click');
  $('body').on('change','#departments',function(){
    let departments = $(this).val();
    let bachelor_of_technology = `<option value="computer_science_engineering">Computer Science Engineering</option>
                                         <option value="electrical_engineering">Electrical Engineering</option>
                                         <option value="mechanical_engineering">Mechanical Engineering</option>
                                         <option value="civil_engineering">Civil Engineering</option>
                                         <option value="humanities">Humanities (Maths & English & Physics & Chemistry)</option>

                                         `;
    let management = `<option value="international_business">International Business</option>
    <option value="general_management">General Management</option>`;

    let commerce  = `<option value="economics">Economics</option>
    <option value="finance_accounts">Finance & Accounts</option>
    <option value="statistics">Statistics</option>`;

    let computer = `<option value="bachelor_of_computer_application">Bachelor of Computer Application (BCA)  </option>
    <option value="bachelor_of_vocation">Bachelor of Vocation (Software Development) </option>`;

    if (departments == 'bachelor_of_technology') {
      $("#branches").empty().append(bachelor_of_technology);
    } else if (departments == 'management') {
      $("#branches").empty().append(management);
    } else if (departments == 'commerce') {
      $("#branches").empty().append(commerce);
    } else if (departments == 'computer_application') {
      $("#branches").empty().append(computer);
    }
  });


window.onload = function () {
  $('#homePopup').modal('show');
  };
})




