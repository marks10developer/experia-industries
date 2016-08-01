<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Spiritedlite
 */
?>
<div id="footer-wrapper" class="animated hiding" data-animation="fadeInUp" data-delay="400">
    	<div class="container">
				<div class="cols-4 widget-column-1">   
						<div class="footerdesc">
						<?php
								if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_footer_text_left") ) {
										dynamic_sidebar('experia_footer_text_left');
								}
						?>
						</div> 
				</div>                  
				<div class="cols-4 widget-column-2">
						<div class="footerdesc">
						<?php
								if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_footer_text_center") ) {
										dynamic_sidebar('experia_footer_text_center');
								}
						?>
						</div>
                </div>
                
                <div class="cols-4 widget-column-3">                   
						<div class="footerdesc">
						<?php
								if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_footer_text_right") ) {
										dynamic_sidebar('experia_footer_text_right');
								}
						?>
						</div>
                </div><!--end .widget-column-4-->
            <div class="clear"></div>
        </div><!--end .container-->
        

		</div>
        <div class="copyright-wrapper">
        	<div class="container">
                <div class="copyright-txt">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved</div>
            </div>
            <div class="clear"></div>
        </div> 
<?php wp_footer(); ?>
</body>
</html>