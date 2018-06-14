$( document ).ready(function() {
   

    $('.scroll-to-top').each(function(){
        $(this).click(function(){ 
          $('html').animate({ scrollTop: 0 }, 'slow'); return true; 
        });
      });

      $('.bt-work-nav').each(function(){
        $(this).click(function(){ 
          $('html').animate({ scrollTop: $('#portfolio')}, 'slow'); return true; 
        });
      });
});
