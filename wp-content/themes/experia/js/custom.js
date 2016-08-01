
// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() {  
	jQuery(".nav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".nav").slideToggle('fast');
	});
	adjustMenu();
    
    var t = setTimeout(function(){
        jQuery('.header-inner').removeClass('animated');
        jQuery('.header-inner').removeClass('fadeInUp');  
    },1500);
    
        jQuery('.srchicon').click(function() {
                jQuery('.searchtop').toggle();
                jQuery('.topsocial').toggle();
        });  
        /* animation on load */
        jQuery('ul.main-menu').circleMenu({
                item_diameter: 70,
                circle_radius: 190,
                direction: 'full',
                step_in:0, 
                step_out:0, 
                trigger: 'click',
                select: function(evt,item){
                        window.location = jQuery(item).find('a').attr('href');    
                }
        });
        jQuery('ul.main-menu').circleMenu('open');
        //jQuery('.tooltip').tooltipster();
        jQuery('.main-menu a').on('click',function(e){
                e.preventDefault();                
        });
        if (!jQuery('body').hasClass('home')) {
                var topInitial = jQuery('.entry-title').offset().top - 60;
                jQuery('body').animate({'scrollTop': topInitial}, '700');
        }
        
})

// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 989) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".nav").hide();
		} else {
			jQuery(".nav").show();
		}
		jQuery(".nav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".nav").show();
		jQuery(".nav li").removeClass("hover");
		jQuery(".nav li a").unbind('click');
		jQuery(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

//CSS Animation
jQuery(window).scroll(function() {
        jQuery('.services-wrap').each(function(){
            var imagePos = jQuery(this).offset().top;
        
            var topOfWindow = jQuery(window).scrollTop();
                if (imagePos < topOfWindow+580) {
                    jQuery(this).addClass("noeffect");
                }
            });
            
         jQuery('#whatwedo .wedobox').each(function(){
            var imagePos = jQuery(this).offset().top;
        
            var topOfWindow = jQuery(window).scrollTop();
                if (imagePos < topOfWindow+400) {
                    jQuery(this).addClass("fadeInUp");
                }
            });			
         
         jQuery('#FrontBlogPost .newsbox').each(function(){
            var imagePos = jQuery(this).offset().top;
        
            var topOfWindow = jQuery(window).scrollTop();
                if (imagePos < topOfWindow+400) {
                    jQuery(this).addClass("fadeInRight");
                }
            });	
    
    
});

 
