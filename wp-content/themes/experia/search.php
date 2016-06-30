<?php get_header(); ?>

<div class="container animated fadeInUp">
     <div class="page_content page_content_inner">
        <section class="site-main">
            <div class="blog-post">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php printf( esc_attr__( 'Search Results for: %s', 'spirited-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
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
                    <?php get_template_part( 'no-results', 'search' ); ?>
                <?php endif; ?>
            </div><!-- blog-post -->
        </section>      
       <?php //get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>