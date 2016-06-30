<?php get_header(); ?>

<div class="container">
     <div class="page_content page_content_inner">
		  <section class="site-main">
			  <?php if ( have_posts() ) : ?> 
					  <h1 class="entry-title">
						  <?php
							  if ( is_category() ) :
								  single_cat_title();
  
							  elseif ( is_tag() ) :
								  single_tag_title('Tag: ');
  
							  elseif ( is_author() ) :
								  /* Queue the first post, that way we know
								   * what author we're dealing with (if that is the case).
								  */
								  the_post();
								  printf( esc_attr__( 'Author: %s', 'experia' ), '<span class="vcard">' . get_the_author() . '</span>' );
								  /* Since we called the_post() above, we need to
								   * rewind the loop back to the beginning that way
								   * we can run the loop properly, in full.
								   */
								  rewind_posts();
  
							  elseif ( is_day() ) :
								  printf( esc_attr__( 'Day: %s', 'experia' ), '<span>' . get_the_date() . '</span>' );
	  
							  elseif ( is_month() ) :
								  printf( esc_attr__( 'Month: %s', 'experia' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	  
							  elseif ( is_year() ) :
								  printf( esc_attr__( 'Year: %s', 'experia' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	  
							  elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
								  esc_html_e( 'Asides', 'experia' );
	  
							  elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
								  esc_html_e( 'Images', 'experia');
	  
							  elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
								  esc_html_e( 'Videos', 'experia' );
	  
							  elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
								  esc_html_e( 'Quotes', 'experia' );
	  
							  elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
								  esc_html_e( 'Links', 'experia' );
	  
							  else :
								  esc_html_e( 'Archives', 'experia' );
	  
							  endif;
						  ?>
					  </h1>
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