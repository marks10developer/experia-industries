<?php get_header(); ?>

<div class="container">
     <div class="page_content page_content_inner">
		  <div class="breadcrumbs" typeof="BreadcrumbList">
			  <?php if(function_exists('bcn_display'))
			  {
				  bcn_display();
			  }?>
		  </div>
		  <section class="site-main">            
			   <?php echo apply_filters('the_content', $post->post_content); ?>
				<?php
					//If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
			   ?>         
		  </section>       
		  <div id="sidebar">
		   <?php
			 if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_ads") ) {
					 dynamic_sidebar('experia_ads');
			 }
		   ?>
		  </div>
		 
		  <div class="clear"></div>
    </div><!-- page_content -->
</div><!-- container -->	
<?php get_footer(); ?>