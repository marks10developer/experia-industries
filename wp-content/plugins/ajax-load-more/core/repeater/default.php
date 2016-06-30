<?php if(get_post_type() == "projects"){ ?>
<div class="col-md-3 project-list-item">
<div class="project-list-image">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(150,150));}?></div>
<h4><?php the_title(); ?>
</h4></a></div>

<?php } ?>