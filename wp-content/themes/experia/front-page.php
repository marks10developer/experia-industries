<?php
get_header(); 
?>
<div class="container animated fadeInUp" data-animation="fadeInUp" data-delay="300">
     <div class="page_content page_content_home">
      <div class="container">
		  <section class="site-main" id="sitefull">
			    
			  <?php //echo do_shortcode('[pjc_slideshow slide_type="home-slider"]'); ?>
              
			  <?php include('circular-menu.php'); ?>
             
               <?php /* ?>
              <div class="col-md-offset-2">
                <div class="wedobox wedobox-2 col-md-9">
                    <div class="boxicon"></div>
                    <div class="boxtitle">
                      <?php esc_attr_e('Authorized Dealers','experia'); ?>
                    </div>
                    <div class="boxdescription">
                      <ul class="dealer-list">
                      <?php foreach(get_dealers() as $index => $dealer) { ?>
                           <li><?php echo get_the_post_thumbnail($dealer->ID,array(200,200)); ?></li>
                      <?php
                           //echo ((($index+1) % 3) == 0) ? '</div><div class="row">' : '';
                      } ?>
                      </ul>
                    </div>
                  
                </div>
              </div>
             
              <div class="clearfix"></div> 
             
              <div class="col-md-offset-2"> 
                  <div class="wedobox col-md-5 news-container">
                    <div class="boxicon"></div>
                    <div class="boxtitle">
                      <?php esc_attr_e('Latest News','experia'); ?>
                    </div>
                    <div class="boxdescription boxdescription-news">
                      <ul class="news-list">
                      <?php foreach(get_news(3) as $news){ ?>
                        <li>
                          <a href="<?php echo get_the_permalink($news->ID); ?>">
                          <div class="img-handler"><?php echo get_the_post_thumbnail($news->ID,array(300,300)); ?></div>
                            <p><?php echo $news->post_title;?></p>
                          </a> 
                        </li>
                      <?php } ?>
                      </ul>
                      <a href="<?php echo get_site_url(); ?>/news" class="btn btn-default">See all News</a>
                    </div> 
                  </div>
                  
                  <div class="wedobox col-md-4 faq">
                    <div class="boxicon"></div>
                    <div class="boxtitle">
                      <?php esc_attr_e('FAQs','experia'); ?>
                    </div>
                    <div class="boxdescription">
                      <i class="fa fa-question-circle fa-5x"></i> <br />
                      <a href="<?php echo get_site_url(); ?>/faqs">Read Frequently Asked Questions</a>
                    </div> 
                    <hr />
                    <div class="boxtitle">
                      <?php esc_attr_e('Projects','experia'); ?>
                    </div>
                    <div class="boxdescription boxdescription-news">
                      <ul class="news-list">
                      <?php foreach(get_projects(2) as $proj){ ?>
                        <li>
                          <a href="<?php echo get_the_permalink($proj->ID); ?>">
                          <div class=""><?php echo get_the_post_thumbnail($proj->ID,array(200,200)); ?></div>
                            <p><?php echo $proj->post_title;?></p>
                          </a> 
                        </li>
                      <?php } ?>
                      </ul>
                      <a href="<?php echo get_site_url(); ?>/accomplished-projects" class="btn btn-default">See all Projects</a>
                    </div>
                  </div>
                  
              </div>
              
            <?php */ ?>
          </section>
          </div>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php //get_footer(); ?>