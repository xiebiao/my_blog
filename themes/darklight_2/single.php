<?php get_header(); ?>

<div id="contentwrap">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="entry single" id="post-<?php the_ID(); ?>">
		<h2 <?php if (is_page()) echo 'style="margin-bottom: 20px;" ' ?>class="entrytitle" id="post-<?php the_ID(); ?>"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			<span><?php edit_post_link('<img class="editpost" alt="Edit" src="' . get_bloginfo('template_directory') . '/images/edit.gif" />', '', ''); ?></span>
		</h2>
		<div class="entrymeta1">
			<span class="meta-date"><?php the_time('M jS Y'); ?></span>
			<span class="meta-author"><?php the_author_link(); ?></span>
			<span class="meta-category"><?php the_category(', ') ?></span>
		</div><!-- [entrymeta1] -->
		<div class="entrybody">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>
		<div class="entrymeta2">
			<span class="single_tags"><?php the_tags('', ' , ' , ''); ?></span>
			<span class="add_comment"><a href="#commentform">Leave a comment</a></span>
			<div class="clear"></div>
		</div><!-- [entrymeta2] -->
    <?php comments_template('',true); // Get wp-comments.php template ?>
	</div><!-- [post] -->
	<?php endwhile; else: ?>
	<p><?php _e('No Entries found.'); ?></p>
	<?php endif; ?>
</div>
<!-- [content] -->
<?php include_once("sidebar_s.php"); ?>
<?php get_footer(); ?>