  jQuery(document).ready(function() {
      jQuery('.fullwidthabanner').revolution({
         delay:9000,
         startwidth:960,
         startheight:500,
         startWithSlide:0,
         
         // Navigation 
         keyboardNavigation: 'on',
         onHoverStop: 'on',
         hideThumbs: '1500',
         navigationType:  'bullet',
         navigationStyle: 'preview4',
         startwidth: 1170,
				 startheight: 500,
				 hideThumbs: 200,

				 fullScreen: "on",
				 fullWidth: "off",

				 touchenabled: "on",
				 onHoverStop: "on",

				 autoHeight:"off",						
				 forceFullWidth:"off",

				 navigationType: "none",
         hideTimerBar:"on",
          
         parallax:"scroll",
         parallaxBgFreeze: 'on'
         
         


      });
      
      var scrollButton = $("#scroll-top");
      $(window).scroll(function(){
          
          if ($(this).scrollTop() >=500) {
          scrollButton.show();
          
          }
          else{
              scrollButton.hide();
          }
          
      });
      scrollButton.click(function()
          {
          $("html,body").animate({ scrollTop : 0 }, 600);
          });
     
    $("html").niceScroll();
       $(".sec1").niceScroll();
    
   });


$('.owl-carousel').owlCarousel({
     items:2,
    loop:true,
    margin:10,
    nav:true,
      
});

