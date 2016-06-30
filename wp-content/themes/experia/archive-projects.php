<?php get_header(); ?>

<div class="container">
     <div class="page_content page_content_inner">
		  <section class="site-main">
			  <?php if ( have_posts() ) : ?>
				  
					  <h1 class="entry-title">Projects </h1>
					  <?php
						  // Show an optional term description.
						  $term_description = term_description();
						  if ( ! empty( $term_description ) ) :
							  printf( '<div class="taxonomy-description">%s</div>', esc_attr($term_description) );
						  endif;
					  ?>
				 
					<div class="container">
						 <div class="row">
						 <?php while ( have_posts() ) : the_post(); ?>
							 <div class="col-sm-9">
								   <h3><i class="fa fa-asterisk"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 </div>
						 <?php endwhile; ?>
						 </div>
					</div>
				  <?php experia_pagination(); ?>
			  <?php else : ?>
				  <?php get_template_part( 'no-results', 'archive' ); ?>
			  <?php endif; ?>
		  </section>
		  <div id="sidebar">
		   <?php
			 if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_ads") ) {
					dynamic_sidebar('experia_ads');
			 }
		   ?>
		  </div>    
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->
	
<?php get_footer(); ?>