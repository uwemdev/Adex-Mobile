<?php get_header(); ?>

<?php 
            while (have_posts()){
            the_post();
            
?>
<div class="container elizabeth-page-template"><div id="content"><div id="elizabeth-side-content"><article id="post-1197884" class="post-1197884 page type-page status-publish hentry"><div class="elizabeth-post-header"><h1><?php the_title();?></h1></div><div class="elizabeth-post-thumb"> <a href="<?php the_permalink();?>"></a></div><div class="elizabeth-post-entry elizabeth-drop-cap"><p class="p2"><span class="s1">
	<?php the_content();?>
	</span></p>
	</div>
	
</article></div>
	
<?php      
}
            wp_reset_query(); ?>	
	
			<?php include "includes/sidebar.php" ?>
	
	</div></div>


<?php get_footer(); ?>