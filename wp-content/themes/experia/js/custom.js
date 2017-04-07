var $ = jQuery;
var min_scroll_height_exchange = 50;
// NAVIGATION CALLBACK 
$(document).ready(function() {  
  init();
 
});
$(window).scroll(function() {
  /*var speed = 500;
  $('.main-menu').addClass('short');
  $('.main-menu-box').removeClass('is-active'); 
  if ($('body').scrollTop() > min_scroll_height_exchange) {
    $('.main-menu').addClass('fadeOutUp');
    $('.secondary-menu-primary').removeClass('hidden').removeClass('fadeInUp').removeClass('fadeOutUp').addClass('fadeInDown');
  
  }else{ 
    $('.main-menu').removeClass('hidden').removeClass('fadeOutUp').addClass('fadeInDown');  
    $('.secondary-menu-primary').removeClass('fadeInDown').addClass('fadeOutUp');
  }*/
});

function init() {
  $('.loader').fadeOut(900,function(){
    $('body').removeClass('hidden');
  }); // Hide Loader

  if ($('body').scrollTop() <= min_scroll_height_exchange) { // Show main menu
    //$('.main-menu').removeClass('hidden').removeClass('fadeOutUp').addClass('fadeInDown');
  } 

  mainMenu();
  $('.fullpage').fullpage({  
				scrollingSpeed: 800, 
    afterLoad: function(anchorLink, index){
      if (index == $('.fullpage').find('.section').length) {
        $('.main-menu').addClass('fadeOutUp');
        $('.secondary-menu-primary').removeClass('hidden').removeClass('fadeInUp').removeClass('fadeOutUp').addClass('fadeInDown');
        
      }else{
        $('.main-menu').removeClass('hidden').removeClass('fadeOutUp').addClass('fadeInDown');  
        $('.secondary-menu-primary').removeClass('fadeInDown').addClass('fadeOutUp'); 
      }

      if (1 == index) {
        $('.scroll-text').removeClass('hidden');
      }else{
        $('.scroll-text').addClass('hidden');
      }
    },
    afterRender: function(){ 
					console.log("afterRender");
				}
			});
}

function mainMenu(){
  var speed = 80;
  var speed2 = 120;
  var speed3 = 170;
  $('.main-menu-box').on('click',function(){
    var menu_box = $(this);
    menu_box.addClass('hidden-v');
    var list = $('.menu-list li');
    if($(this).hasClass('is-active')){ // Closed Menu
      
      list.each(function(i,o){
          var elem = $(this);
          var tm = setTimeout(function(){
              elem.removeClass('fadeInLeft').addClass('fadeOutLeft');
              if ((list.length - 1) == i) { 
                var tm2 = setTimeout(function(){ 
                  
                  list.addClass('hidden');
                  var tm3 = setTimeout(function(){  
                        menu_box.removeClass('hidden-v');
                        var tm4 = setTimeout(function(){ 
                          menu_box.removeClass('is-active');
                          $('.main-menu').addClass('short');
                          clearTimeout(tm4);
                        }, 80);
                    clearTimeout(tm3);
                  },speed3); 
                  clearTimeout(tm2);
                },speed2 * 2);
              } 
              clearTimeout(tm); 
          }, (i+1) * (speed));
      });
    }else{ // Opened Menu
      $('.main-menu').removeClass('short');
      list.each(function(i,o){
          var elem = $(this);
          var tm = setTimeout(function(){ 
            elem.addClass('fadeInLeft').removeClass('fadeOutLeft').removeClass('hidden');
            if ((list.length - 1) == i) { 
              var tm2 = setTimeout(function(){
                menu_box.removeClass('hidden-v');
                var tm3 = setTimeout(function(){
                  menu_box.addClass('is-active');
                  clearTimeout(tm3);
                },speed3);
                clearTimeout(tm2);
              },speed2);
            }
            clearTimeout(tm);
          }, (i+1) * speed);
      });
    }
  });
}