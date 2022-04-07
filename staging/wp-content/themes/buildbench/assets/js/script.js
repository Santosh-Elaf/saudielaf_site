jQuery( document ).ready( function($){
   "use strict";

   
   /**-------------------------------------------------
     *Fixed Header
     *----------------------------------------------------**/
    $(window).on('scroll', function () {

      /**Fixed header**/
      if ($(window).scrollTop() > 250) {
      $('.navbar-sticky').addClass('sticky fade_down_effect');
      } else {
      $('.navbar-sticky').removeClass('sticky fade_down_effect');
      }
});


  /* ----------------------------------------------------------- */
  /*  Mobile Menu
  /* ----------------------------------------------------------- */
   $('.dropdown > a').on('click', function(e) {
      e.preventDefault();
      if($(window).width() > 991)
      {
         location.href = this.href; 
      } 
      var dropdown = $(this).parent('.dropdown');
      dropdown.find('>.dropdown-menu').slideToggle('show');
      $(this).toggleClass('opened');
      return false;
    });

    /* ---------------------------------------------
      Popup
   ------------------------------------------------ */
 
   if ($('.popup-btn').length > 0) {
      $('.popup-btn').magnificPopup({
         disableOn: 500,
         type: 'iframe',
         mainClass: 'mfp-fade',
         removalDelay: 160,
         preloader: false,
    
         fixedContentPos: false
      });
    }

    
   /* ----------------------------------------------------------- */
   /*  Site search
   /* ----------------------------------------------------------- */


   $('.nav-search').on('click', function () {
      $('.search-block').fadeIn(350);
      $('.nav-search').addClass('hide');
   });

   $('.search-close').on('click', function () {
      $('.search-block').fadeOut(350);
      $('.nav-search').removeClass('hide');
   });



      /* ----------------------------------------------------------- */
   /*  Site search modal
   /* ----------------------------------------------------------- */
   if ($('.xs-modal-popup').length > 0) {
      $('.xs-modal-popup').magnificPopup({
          type: 'inline',
          fixedContentPos: false,
          fixedBgPos: true,
          overflowY: 'auto',
          closeBtnInside: false,
          callbacks: {
              beforeOpen: function beforeOpen() {
                  this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
              }
          }
      });
  }

 
   /* ----------------------------------------------------------- */
   /*  Back to top
   /* ----------------------------------------------------------- */

   $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(window).height()) {
       $(".BackTo").fadeIn('slow');
    } else {
       $(".BackTo").fadeOut('slow');
    }

    });
    $("body, html").on("click", ".BackTo", function (e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 800);
    });
	
// 	ARABIC LANGUAGE SWITCHER 
	(function () {
	var theLanguage = $('html').attr('lang');
	if (theLanguage == 'ar') {
		$(".body-innner-content, h1.slider-title, .ar-font, .ar-font h2, .ts-title, .section-title, span.sub-title, .ts-working-box h3, h3.banner-title, .ar-font h3, .ar-font p, .ar-box h3, .ar-box p, .text-widget h3, h3.widget-title").css("font-family","Almarai, sans-serif");
		
		$(".ar-text-align-right h2, .ar-box h3, .ar-box p, .ar-text-align-right h3, .ar-text-align-right h4").css("text-align","right");
		
		$(".menu-item-object-language_switcher").css({"position":"absolute","left":"0"});
	}
		else {
			$(".menu-item-object-language_switcher").css({"position":"absolute","right":"0"});
		}
		
	}());

   
} );