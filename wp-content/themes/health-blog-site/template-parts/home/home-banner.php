<div class="divider home-banner-main-wrap">
    <div class="container">
        <div class="disp-tbl">
            <div class="home-banner-left">
            <?php
            global $exclude_posts;
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => 1, 
                'orderby' => 'modified',
                'tag' => 'home-banner',
                'post__not_in' => $exclude_posts    
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$exclude_posts[] = $post->ID;
            ?>
                <a class="home-banner-left-a disp-tbl disp-tbl-mob" href="<?php the_permalink(); ?>">    
                    <div class="content-wrap">
                        <?php $catArr =  get_the_category (); ?>
                        <div class="cat-tag light-cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag"> <?php echo $catArr[0] -> name; ?> </div>  
                        <h3 class="home-banner-left-title"><?php the_title(); ?></h3>  
                        <p class="home-banner-left-desc"><?php custom_excerpt_length(60); ?></p>   
                    </div>
                    <div class="img-wrap">
                        <div class="banner-img-overlay">
                            <span>read more</span>
                        </div>  
                        <?php if ( has_post_thumbnail($post->ID) ) {
                            the_post_thumbnail('thumbnail_550x550', array('class' => 'img-responsive tran', 'title' => get_the_title() ));
                        } ?>
                    </div>
                </a>
            <?php endwhile; endif; wp_reset_query(); ?> 
            </div>  
            <div class="home-banner-right">
            <?php
            if( wp_is_mobile() ){
                $post_count = 2; $mob_class = 'mob'; 
            }else{
                $post_count = 3; $mob_class = 'desk'; 
            }
            $args = array(
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'posts_per_page' => $post_count, 
                'orderby' => 'modified',
                'tag' => 'home-banner',
                'post__not_in' => $exclude_posts    
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if ( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();$exclude_posts[] = $post->ID;
            ?>
                <a class="home-banner-right-a disp-b <?php echo $mob_class; ?>" href="<?php the_permalink(); ?>">    
                    <div class="content-wrap tran">
                        <?php $catArr =  get_the_category (); ?>
                        <div class="cat-tag light-cat-tag <?php echo $catArr[0] -> slug; ?>-cat-tag"> <?php echo $catArr[0] -> name; ?> </div>  
                        <h3 class="home-banner-right-title"><?php the_title(); ?></h3>
                        <?php if( !wp_is_mobile() ){ ?> 
                            <p class="home-banner-right-desc"><?php custom_excerpt_length(60); ?></p>       
                        <?php } ?>
                    </div>
                </a>
            <?php endwhile; endif; wp_reset_query(); ?>      
            </div>
        </div>
    </div>
</div>  