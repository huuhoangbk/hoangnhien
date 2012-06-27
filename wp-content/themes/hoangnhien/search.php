<?php get_header(); ?>

<div class="box">
	<img src="<?=_p()?>/images/empty.gif" class="green-leaves" alt="" />
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt two-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-left">
				<div class="posts">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?>, posted in <?php the_category(', ') ?></small>
				<div class="entry"><?php the_content(''); ?></div>

				<div class="postmeta more">
					<a href="<?php the_permalink() ?>"><span>read more</span></a>
					<?php comments_popup_link('<span>no comments</span>', '<span>1 comment</span>', '<span>% comments</span>'); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="nav">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="pagetitle">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>
			</div>
			<div class="side-right">
				<?php get_sidebar(); ?>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>
<?php get_footer(); ?>