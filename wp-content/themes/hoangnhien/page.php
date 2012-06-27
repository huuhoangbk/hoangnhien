<?php get_header(); ?>
<div class="box">
	<img src="<?=_p()?>/images/empty.gif" class="green-leaves" alt="" />
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt two-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-left">
				<div class="posts">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post nobrd" id="post-<?php the_ID(); ?>">
							<h2 class="normal"><?php the_title(); ?></h2>
							<div class="entry">
								<?php the_content(''); ?>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="side-right">
				<?php get_sidebar('page'); ?>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>
<?php get_footer(); ?>