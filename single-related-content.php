<div class="post-related"><div class="post-box"><h4 class="post-box-title"><span>Related Posts</span></h4></div>
<?php $args=array('posts_per_page'=>3,'post__not_in'=>array(get_the_ID()),'no_found_rows'=>true,);$cats=wp_get_post_terms(get_the_ID(),'category');$cats_ids=array();foreach($cats as $wpex_related_cat){$cats_ids[]=$wpex_related_cat->term_id;}if(!empty($cats_ids)){$args['category__in']=$cats_ids;}$wpex_query=new wp_query($args);foreach($wpex_query->posts as $post):setup_postdata($post); ?>	
	<div class="item-related"> <a href="<?php the_permalink(); ?>"><img width="520" height="400" src="<?php echo catch_that_image();?>" ></a><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3> <a href="<?php the_permalink();?>"><span class="date"><?php the_date(); ?></span></a></div>

<?php endforeach;wp_reset_postdata(); ?>

</div>



