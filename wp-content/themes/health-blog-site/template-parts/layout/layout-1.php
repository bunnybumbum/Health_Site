<div class="layout1-post-wrap">
<a class="layout1-a post-a disp-b" href="<?php the_permalink(); ?>">    
    <div class="img-wrap">  
        <?php if ( has_post_thumbnail($post->ID) ) {
            the_post_thumbnail('thumbnail_700x490', array('class' => 'img-responsive tran', 'title' => get_the_title() ));
        } ?>
    </div>
    <div class="content-wrap tran">  
        <div class="content-overlay">
            <span>read more</span>
        </div>
        <?php $catArr =  get_the_category (); ?>
        <div class="cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag tran"> <?php echo $catArr[0] -> name; ?> </div>
        <h3 class="layout1-title post-title tran"><?php the_title(); ?></h3>
        <p class="read-more">
            read more
            <?php echo get_svgs('common-cta'); ?>
        </p>     
    </div>
</a>
</div>