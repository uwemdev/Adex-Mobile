<!-- MUSIC OF THE WEEK -->
<div class="bg-c-white m-t-md of-the-week p-a-lg bd-round-a-sm" data-v-2319579e><h2 class="m-t-none m-b-none" data-v-2319579e>Song of the week</h2>
<!-- THE SETUP ENGINE -->
<?php
            query_posts('orderby=comment_count&posts_per_page=1&cat=2');
            //If there are posts. checks to see if the current query has any results to loop over. 
            if (have_posts()) :
                //loop through the posts and list each until done. 
                while (have_posts()) : 
                    //Iterate the post index in The Loop. 
                    the_post(); 
                    ?>
<div class="m-t-sm" data-v-e18c06a4 data-v-2319579e><?php if(has_post_thumbnail()):?>
<img src="<?php the_post_thumbnail_url();?>" class="bd-round-a-xxxsm shadow-lighter">

<?php else: ?>
<img src="<?php echo catch_that_image(); ?>" class="bd-round-a-xxxsm shadow-lighter">

<?php endif; ?><a href="<?php the_permalink(); ?>" class="m-t-sm txt-center txt-normal" data-v-e18c06a4><h3 class="h" data-v-e18c06a4><?php the_title(); ?></h3></a></div>
<?php
                endwhile; 
            endif;
            //Destroy the previous query. This is a MUST.
            wp_reset_query();
            ?>
</div>
