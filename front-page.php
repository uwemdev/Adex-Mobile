<style>
button.load-more-index a {
    color: #000;
    font-weight: bolder;
}
</style>
<?php get_header(); ?>

<div class="container-fluid"><div class="content">

<?php 
            $args = array(
                'post_type' => 'post',
				'paged' => $paged
            );

            $blogposts = new WP_Query($args);
            while ($blogposts->have_posts()){
            $blogposts->the_post();
            
?>

<div class="gp-post row"><div class="img"> 
<?php if(has_post_thumbnail()):?>
    <img width="200" height="113" src="<?php the_post_thumbnail_url();?>" data-lazy-type="image" data-lazy-src="<?php the_post_thumbnail_url();?>" class="lazy lazy-hidden attachment-mobile-thumb size-mobile-thumb wp-post-image" alt="" itemprop="image" data-lazy-sizes="(max-width: 200px) 100vw, 200px">
    <?php else: ?>
        <img width="200" height="113" src="<?php echo catch_that_image(); ?>" data-lazy-type="image" data-lazy-src="<?php echo catch_that_image(); ?>" class="lazy lazy-hidden attachment-mobile-thumb size-mobile-thumb wp-post-image" alt="" itemprop="image" data-lazy-sizes="(max-width: 200px) 100vw, 200px">
        <?php endif; ?>
</div><div class="meta"> <small class="cat"> <?php the_category(',');?> </small><h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></div></div>
<?php }
            wp_reset_query();
            ?>




<div class="newsletter"><div id="mc4wp_form_widget-2" class="widget newsletter-widget widget_mc4wp_form_widget"><script type="text/javascript">(function() {
    if (!window.mc4wp) {
        window.mc4wp= {
            listeners: [], forms: {
                on: function (event, callback) {
                    window.mc4wp.listeners.push( {
                        event: event, callback: callback
                    }
                    );
                }
            }
        }
    }
}

)();
</script><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1163029" method="post" data-id="1163029" data-name="Join Our Subscriber List"><div class="mc4wp-form-fields"><p> <label for="email">Join Our Subscribers Club </label> <input type="email" id="email" name="EMAIL" placeholder="Your email address" required=""></p><p> <input type="submit" value="Click Here"></p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1583493125"><input type="hidden" name="_mc4wp_form_id" value="1163029"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"><div class="mc4wp-response"></div></form></div></div>


<div class="video-container"><h3>Wedding Videos</h3><div class="vid"><div class="vid-list">
<?php
            query_posts('orderby=comment_count&posts_per_page=5&cat=956');
            //If there are posts. checks to see if the current query has any results to loop over. 
            if (have_posts()) :
                //loop through the posts and list each until done. 
                while (have_posts()) : 
                    //Iterate the post index in The Loop. 
                    the_post(); 
                    ?>
<div class="vid-item" data-code="Yf6X9bxUi4E" data-platform="Youtube" data-title="<?php the_title();?>" data-credit="<p>Samon Films</p> "><div class="vid-img"><div class="overlay"></div> 
<?php if(has_post_thumbnail()):?>
<img width="520" height="400" src="<?php the_post_thumbnail_url();?>" data-lazy-type="image" data-lazy-src="<?php the_post_thumbnail_url();?>" class="lazy lazy-hidden attachment-elizabeth-misc-thumb size-elizabeth-misc-thumb wp-post-image" alt="" data-lazy-srcset="<?php the_post_thumbnail_url();?> 520w, <?php the_post_thumbnail_url();?> 70w" data-lazy-sizes="(max-width: 520px) 100vw, 520px">

<?php else: ?>
<img width="520" height="400" src="<?php echo catch_that_image();?>" data-lazy-type="image" data-lazy-src="<?php echo catch_that_image();?>" class="lazy lazy-hidden attachment-elizabeth-misc-thumb size-elizabeth-misc-thumb wp-post-image" alt="" data-lazy-srcset="<?php echo catch_that_image();?> 520w, <?php echo catch_that_image();?> 70w" data-lazy-sizes="(max-width: 520px) 100vw, 520px">
<?php endif ?>

</div><div class="vid-meta"><h3><?php the_title();?></h3></div></div>
<?php
                endwhile; 
            endif;
            //Destroy the previous query. This is a MUST.
            wp_reset_query();
            ?>

</div></div>
<div class="load-more-index-container"><button class="load-more-index"><?php next_posts_link('Load More'.''); ?></button></div>	
    </div></div></div> 

</div></div></div>

<?php get_footer(); ?>
