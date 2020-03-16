<?php get_header(); ?>

<div data-v-110ac1c7="" class=" posts-list">

<?php include "advertise.php"; ?>

<p data-v-3a1b0970="" class="txt-c-white m-b-sm txt-s-sm"><a data-v-3a1b0970="" href="/" class="txt-s-sm txt-c-link-color-shade-1 router-link-active">Home</a> > <?php the_title(); ?></p>

<!----><!----><article data-v-110ac1c7="" style="height: 80%;"><!----><div><!---->
            
<?php
    query_posts('orderby=comment_count&posts_per_page=100');
    //If there are posts. checks to see if the current query has any results to loop over. 
    if (have_posts()) :
        //loop through the posts and list each until done. 
        while (have_posts()) : 
            //Iterate the post index in The Loop. 
            the_post(); 
            ?>

<article class="article flex shadow-flat m-b-sm bg-c-white"><header class="m-l-sm flex column space-between p-t-sm p-b-sm p-r-sm p-l-xxsm"><label class="m-b-xxxxsm inline-block txt-bold txt-c-grey-shade-2" style="text-transform: uppercase; letter-spacing: 5px;">
<?php foreach((get_the_category()) as $category){
        echo $category->name." ";
        }	?>
        </label><a href="<?php the_permalink();?>" class="txt-c-black"><h3 class="m-t-none h txt-c-black txt-s-md sm-txt-s-sm  m-b-none">
<?php the_title(); ?>
            </h3></a><time class="m-t-sm">
            <?php the_date(); ?>
        </time><a href="<?php the_permalink();?>" class="m-t-sm">
            Read more &gt;
        </a></header><div class="img flex sm-w-xxxxxlg m-l-auto w-xxxxxxxlg bd-round-t-r-xsm bd-round-b-r-xsm"><?php if(has_post_thumbnail()):?>
<img src="<?php the_post_thumbnail_url();?>" class="bd-round-t-r-xsm m-l-auto bd-round-b-r-xsm" alt="">

<?php else: ?>
<img src="<?php echo catch_that_image(); ?>" class="bd-round-t-r-xsm m-l-auto bd-round-b-r-xsm" alt="">

<?php endif; ?></div></article>

        <?php
        endwhile; 
    endif;
    //Destroy the previous query. This is a MUST.
    wp_reset_query(); ?>
    
        
        <!-- Exclude This Div In The loop -->
        </div>
        <?php include "includes/pagination.php"; ?>
        <!----><!----></article>
</div></div></div>

            <?php get_footer(); ?>