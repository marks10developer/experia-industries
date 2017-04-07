<?php get_header();?>
<div class="container">
    <div class="page_content page_content_home">
      <div class="container">
          <section class="site-main"> 
              <?php $sections = get_field('sections'); ?>
              <?php if(!empty($sections)){ ?>
                <div class="fullpage">
                  <?php
                    foreach($sections as $key => $section){
                    $background_image = $section['background_image'];
                    $content = trim($section['content']);
                    $footer_text = trim($section['footer_text']);
                  ?>
                  <div class="section" id="section<?php echo $key; ?>" style="background: url('<?php echo isset($background_image['url']) ? $background_image['url'] : ''; ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                      <?php if(!empty($content)){ ?>
                        <div class="section-header"></div>
                        <div class="section-content"><?php echo apply_filters('the_content', $content); ?></div>
                      <?php } ?>
                      <?php if(!empty($footer_text)){ ?>
                        <div class="section-footer"><?php echo $footer_text; ?></div>
                      <?php } ?>
                  </div>
                <?php } ?>
                </div>
              <?php } ?>
          </section>
          <div class="scroll-text">
            Scroll <i class="fa fa-sort-down animated infinite fadeInDown" aria-hidden="true"></i>
          </div>
      </div>
    <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>