<div class="layout3-post-wrap">
<a class="layout3-a post-a disp-tbl disp-tbl-mob" href="<?php the_permalink(); ?>" title="<?php the_title() ?>">    
    <div class="img-wrap">  
        <?php if ( has_post_thumbnail($post->ID) ) {
            the_post_thumbnail('thumbnail_700x490', array('class' => 'img-responsive tran', 'title' => get_the_title() ));
        } ?>
    </div>
    <div class="content-wrap">  
        <?php if( ! is_category() ){ ?>
            <?php $catArr =  get_the_category (); ?>
            <div class="cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag"> <?php echo $catArr[0] -> name; ?> </div>
        <?php } ?>
        <h3 class="layout3-title post-title tran"><?php the_title(); ?></h3>
        <p class="layout3-desc post-desc"><?php custom_excerpt_length(140); ?></p>
        <p class="read-more"> read more </p> 
    </div>
</a>
</div>