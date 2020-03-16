<?php get_header(); ?>   
<?php 
while(have_posts()){
the_post();
?>

<div class="container"><div id="content"><div id="elizabeth-side-content"><article id="post-1241506" class="large-post post-1241506 post type-post status-publish format-standard has-post-thumbnail hentry category-bn-bling category-proposals tag-thesynergy19 tag-bn-bling tag-bn-love-story tag-bn-pre-wedding-shoot tag-karen tag-maduka tag-proposals"><div class="elizabeth-post-header"> <span class="cat"><?php the_category(', '); ?></span><h1><?php the_title(); ?></h1><div class="post-meta"> <span class="post-author"><?php the_author_posts_link(); ?> </span> <span class="post-date"><?php the_date(); ?></span> <span><a href="#comment"><?php comments_number( '0', '1', '%' ); ?> Comments</a> </span></div></div><div class="elizabeth-post-thumb">
	
	<?php if(has_post_thumbnail()):?>
<img width="1080" height="1349" src="<?php the_post_thumbnail_url();?>">
<?php endif; ?>
	
</div>
	
	<div class="elizabeth-post-entry elizabeth-drop-cap">
		<?php the_content(); ?>
		
		<div class="post-tags">
			<?php the_tags('<div class="post-tags"> ',' ','</div>'); ?>
</div> 
		
<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<div class="post-share"><div class="post-share-box share-buttons"> <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a> <a target="_blank" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a> <a data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_attr($pin_image); ?>"><i class="fa fa-pinterest"></i></a> <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></div></div>
		
<div class="post-pagination"> 
	<?php previous_post_link('<span class="prev">%link</span>'); ?>
		<?php next_post_link('<span class="next">%link</span>'); ?> </div> 
		
		
		<?php include "includes/single-related-content.php"; ?>
		
		
		<?php comments_template(); ?>  
	
	
	</div></article> 
	
	<?php include "includes/sidebar.php" ?>
	</div></div>
							
							


<?php	
}
?>

</div></div></div>
<script>var prev = document.querySelector(".post-pagination span.prev a");
var next = document.querySelector(".post-pagination span.next a");
prev.textContent = "PREVIOUS POST";
next.textContent = "NEXT POST";
</script>
<?php get_footer(); ?>