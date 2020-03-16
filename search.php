<?php get_header(); ?>


<div class="container">
    <div id="content">
        <div id="elizabeth-side-content">
            <div class="archive-page-title"> <span>Search Results For</span>
                <h1><?php echo get_search_query(); ?></h1></div>
			<?php 
            while (have_posts()){
            the_post();
            
?>
            <article id="post-1241509" class="classic-blog post-1241509 post type-post status-publish format-standard has-post-thumbnail hentry category-bn-bling category-proposals tag-dna2020 tag-bn-bling tag-bn-love-story tag-bn-pre-wedding-shoot tag-daniel tag-maduka tag-natalie tag-proposals">
                <div class="elizabeth-post-thumb">
                    <a href="<?php the_permalink();?>"><img width="520" height="400" src="<?php echo catch_that_image();?>" data-lazy-type="image" data-lazy-src="<?php echo catch_that_image();?>" class="lazy attachment-elizabeth-misc-thumb size-elizabeth-misc-thumb wp-post-image lazy-loaded" alt="" data-lazy-srcset="<?php echo catch_that_image();?> 520w, <?php echo catch_that_image();?> 70w" data-lazy-sizes="(max-width: 520px) 100vw, 520px" srcset="<?php echo catch_that_image();?> 520w, <?php echo catch_that_image();?> 70w" sizes="(max-width: 520px) 100vw, 520px">
                    </a>
                </div>
                <div class="classic-post-content">
                    <div class="elizabeth-post-header">
                        <div class="classic-blog-meta-wrap"> <span class="cat"><?php the_category(); ?></span></div>
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></div>
                    <div class="elizabeth-post-entry">
                        <p><?php the_excerpt();?></p>
                    </div> <a href="<?php the_permalink();?>" class="read-more"><span class="read-more-text">Read Now</span></a></div>
            </article>
			<?php      
}
            wp_reset_query(); ?>
			
            <div class="pagination">
                
                <div class="newer"><?php next_posts_link('Older Posts'.''); ?></div>
           <div class="older"><?php previous_posts_link('Newer Posts'.''); ?></div> 
			</div>
			
			<?php include "includes/googleAds.php" ?>
			<?php include "includes/sidebar.php" ?>
   
		
		</div>
</div>



<?php get_footer(); ?>

