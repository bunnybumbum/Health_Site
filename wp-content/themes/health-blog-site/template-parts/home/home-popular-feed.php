<div class="divider popular-feed-wrap">
    <div class="section-title">popular feed</div>

    <div class="popular-feed-post-wrap">
        <?php
        $args = array(
            'post_type' => 'post', 
            'post_status' => 'publish', 
            'posts_per_page' => 3, 
            'orderby' => 'modified',
            'tag' => 'popular-feed',
        );
        $my_query = null;
        $my_query = new WP_Query($args); $post_count = 0;
        if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$post_count++;
            if( $post_count == 1){
        ?>
                <div class="popular-feed-post-main">
                    <a class="popular-feed-a disp-b tran" href="<?php the_permalink(); ?>" title="<?php the_title() ?>">    
                        <div
                            class="bg-img-wrap"
                            style="background: url(<?php echo get_the_post_thumbnail_url(null,  'thumbnail_400x600') ?>) center center/cover no-repeat ;"
                        >
                        </div>
                        <div class="cat-tag-title-wrap">  
                            <?php $catArr =  get_the_category (); ?>
                            <div class="cat-tag light-cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag"> <?php echo $catArr[0] -> name; ?> </div>
                            <h3 class="popular-feed-title"><?php the_title(); ?></h3>
                        </div>
                        <p class="popular-feed-desc post-desc">
                            <span class="desc-span"><?php custom_excerpt_length(400); ?></span>
                            <span class="read-more">read more</span>
                        </p>
                    </a>
                </div> 
                <?php }else{ ?>
                <div class="popular-feed-post col-post-wrap full-width">
                    <?php get_template_part( 'template-parts/layout/layout', '3' ); ?>
                </div>  
                 
        <?php } endwhile; endif; wp_reset_query(); ?>   
        <div class="popular-feed-full-width-wrap"></div>         
    </div>  
</div>