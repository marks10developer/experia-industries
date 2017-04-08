<?php get_header(); ?>
 
      <div class="page-inner-container page-inner">
				<h1><?php the_title(); ?></h1>
				<div class="container">
					<?php the_content(); ?>
					<?php
					$sections = get_field('sections');
					if(!empty($sections)){
					?>

						<?php foreach($sections as $section){ ?>
						<div class="row section-item">
							<?php if('Text Left & Image Right' == $section['position']){ ?>
								<div class="section-text-content col-md-7"><?php echo apply_filters('the_content',$section['content_text']); ?></div>
								<div class="section-image col-md-5"><img src="<?php echo $section['image']['url']; ?>" /></div>
							<?php } else { ?>
								<div class="section-image col-md-5"><img src="<?php echo $section['image']['url']; ?>" /></div>
								<div class="section-text-content col-md-7"><?php echo apply_filters('the_content',$section['content_text']); ?></div>
							<?php } ?>
						</div>
						<?php } ?> 
					<?php } ?>
				</div>
 
 
<?php get_footer(); ?>