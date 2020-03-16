<div class="m-t-md sticky" style="top:20px;" data-v-2319579e><div class="bg-c-white t-sm of-the-week m-b-md p-a-lg bd-round-a-sm" data-v-2319579e><h2 class="m-t-none m-b-none" data-v-2319579e>Featured posts</h2><div class="m-t-lg" data-v-2319579e><article style="height:80%;" data-v-2319579e>
<?php
    query_posts('orderby=comment_count');
    //If there are posts. checks to see if the current query has any results to loop over. 
    if (have_posts()) :
        //loop through the posts and list each until done. 
        while (have_posts()) : 
            //Iterate the post index in The Loop. 
            the_post(); 
            ?>
<div class="listList" data-v-66472832 data-v-2319579e><article class="has flex m-b-xxlg article-small" data-v-66472832><div class=" bd-round-a-sm flex bg-c-pry txt-c-white" style="height:70px;min-width:70px;" data-v-66472832><span class="txt-s-sm txt-bold m-a-auto" id="spanNum" data-v-66472832></span></div><header class="flex m-l-sm column space-around" data-v-66472832><h3 class="num h m-t-none title txt-normal" style="line-height:170%!important;" data-v-66472832>
<?php the_title(); ?>
</h3><a href="<?php the_permalink(); ?>" data-v-66472832>Read more</a></header></article></div>
<?php
        endwhile; 
    endif;
    //Destroy the previous query. This is a MUST.
    wp_reset_query();
    ?>

</article></div></div></div>