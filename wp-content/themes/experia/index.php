<?php
get_header(); 
?>
<div class="container animated fadeInUp" data-animation="fadeInUp" data-delay="300">
     <div class="page_content page_content_home">
		  <section class="site-main" id="sitefull">
			    
			   <?php // echo do_shortcode('[pjc_slideshow slide_type="home-slider"]'); ?>
			   
			   <div class="dealers">
					<h2>Authorized Dealers</h2>
					<div class="container">
						 <ul class="dealer-list">
						 <?php foreach(get_dealers() as $index => $dealer) { ?>
							  <li><?php echo get_the_post_thumbnail($dealer->ID,array(280,280)); ?></li>
						 <?php
							  //echo ((($index+1) % 3) == 0) ? '</div><div class="row">' : '';
						 } ?>
						 </ul>
						 <div class="clear"></div>
					</div>
			   </div><!-- blog-post -->
		  </section>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>