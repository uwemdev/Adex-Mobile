<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="comments-alt" ';
?>

<!-- You can start editing here. -->
<div data-v-694263e4="" data-v-3a1b0970="" class="m-t-lg"><h2 data-v-694263e4="" class="m-t-none"><?php comments_number(__('', 'carrington-mobile'), __('<div class="comments">1 Comment</div>', 'carrington-mobile'), __('% Comments', 'waploaded')) ?></h2><section data-v-694263e4="" class="m-t-lg bg-c-white p-a-md bd-round-a-sm"><div data-v-bd2f356c="" data-v-694263e4="">
<?php comments_number(__('	<div class="post-comments" id="comments"><div class="post-box"><h4 class="post-box-title"><span>No Comments</span></h4></div><div id="comments_pagination"></div>', 'carrington-mobile'), __('', 'carrington-mobile'), __('', 'carrington-mobile')) ?>

<?php if ($comments) : ?>
<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>

		<li style="list-style: none !important;">
<style>
.comment[data-v-cbfbde62] {
    display: block!important;
    width: 100%;
    margin-left: -26px;
}
</style>

<!-- Comment Start -->
<div data-v-cbfbde62="" data-v-bd2f356c="" class="comment bg-c-white shadow-flat bd-round-a-sm p-a-sm m-t-md"><div data-v-cbfbde62="" class="flex">
							
							<div data-v-cbfbde62="" class="m-l-sm flex column full-width"><div data-v-cbfbde62="" class="flex column full-width"><p data-v-cbfbde62="" class="m-t-xxxxxsm m-b-md">
                            <?php comment_text(); ?>
                    </p><div data-v-cbfbde62="" class=" flex sm-flex sm-column space-between txt-s-xxsm"><?php comment_author_link() ?><span data-v-cbfbde62="" class="txt-s-sm txt-light m-t-auto m-b-auto txt-c-black-shade-2">
                            ·
                        </span><time data-v-cbfbde62="" class="txt-s-xxsm sm-txt-s-xxxsm txt-light m-l-xxxxxsm m-t-auto m-b-auto txt-c-black-shade-2"><?php comment_date() ?> at <?php comment_time() ?>
                        </time></div><div data-v-cbfbde62="" class="flex sm-m-t-sm sm-m-l-auto m-t-auto m-b-auto"><span data-v-cbfbde62="" class="flex txt-s-xxsm sm-txt-s-xxxsm txt-light txt-c-black-shade-2"></div></div></div><div data-v-cbfbde62="" id="comment_box_328"><!----></div></div></div></div>
						<!-- Comment End -->
		</li>
		<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>
</div><!----></section>



<section  data-v-781c6712="" data-v-694263e4="" class="m-t-lg bg-c-grey-shade-3 p-a-sm bd-round-a-md" id="comment_box">
<tr><td class="bold l pu">
<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

	<div id="respond" class="comment-respond"><h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#comment" style="display:none;">Cancel Reply</a></small></h3></div>

<div data-v-781c6712="" class="m-t-md"><form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" data-v-781c6712=""><div data-v-47e43bee="" data-v-781c6712="">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
<?php else : ?>
   
	<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="<?php echo $comment_author; ?>" size="30" maxlength="245" required="required"></p>
	<?php endif; ?>


<div data-v-781c6712="" class="m-t-sm"><div data-v-2fde0fda="" data-v-781c6712=""><div data-v-2fde0fda="" class="relative"><textarea data-v-2fde0fda="" class="default" name="comment" placeholder="Comment" required="required" rows="6" id="comment"></textarea><!----></div><!----></div></div>

	<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>
	</p>
	</form>
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</table>
</section>