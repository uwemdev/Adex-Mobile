<?php if(have_posts()): while(have_posts()): the_post() ?>
<div class="card mb-3">
<div class="card-body d-flex justify-content-center align-items-center">
<?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('small');?>" alt="<?php the_title(); ?>" class="img-fluid mt-5 img-thumbnail">
<?php endif; ?>

<div class="blog-content ml-3">
<h4><?php the_title(); ?></h4>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
</div></div></div>
<?php endwhile; else: endif; ?>