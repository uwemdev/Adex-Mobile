<?php if(have_posts()): while(have_posts()): the_post() ?>
<?php echo get_the_date(); ?>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php 
$fname = get_the_author_meta('first_name'); 
$lname = get_the_author_meta('last_name'); 
?>

Posted By <?php echo $fname; ?> <?php echo $lname; ?>
<p class="badge btn-danger"><?php the_category(', '); ?></p>
<?php the_tags('<p class="badge btn-danger">',', ','</p>'); ?>

<?php comments_template(); ?>
<?php endwhile; else: endif; ?>