<div class="layout2-post-wrap">
<a class="layout2-a post-a disp-tbl" href="<?php the_permalink(); ?>" title="<?php the_title() ?>">    
    <div class="img-wrap">  
        <?php if ( has_post_thumbnail($post->ID) ) {
            the_post_thumbnail('thumbnail_700x530', array('class' => 'img-responsive tran', 'title' => get_the_title() ));
        } ?>
    </div>
    <div class="content-wrap">  
        <h3 class="layout2-title post-title tran"><?php the_title(); ?></h3> 
        <p class="read-more">read more</p>    
    </div>
</a>
</div>