<?php get_header(); ?>

<div class="container">
     <div class="page_content page_content_inner">
		  <div class="breadcrumbs" typeof="BreadcrumbList">
			  <?php if(function_exists('bcn_display'))
			  {
				  bcn_display();
			  }?>
		  </div>
	 
		 
		  <div class="clear"></div>
    </div><!-- page_content -->
</div><!-- container -->	
<?php get_footer(); ?>