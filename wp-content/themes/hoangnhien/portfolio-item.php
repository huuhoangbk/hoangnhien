<?php
/*
Template Name: Portfolio Item
*/
?>

<?php get_header(); ?>

<?php /*if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post nobrd" id="post-<?php the_ID(); ?>">
		<h2 class="normal"><?php the_title(); ?></h2>
		<div class="entry">
			
			<div class="image">
				<?=_get_project_info('image', $post->post_content); ?>
			</div>
			url: <?= _get_field($post->ID, 'url'); ?>
			<div class="info">
				<?php echo apply_filters('the_content', _get_project_info('short_info', $post->post_content)); ?>
				<br />
				<?php echo apply_filters('the_content', _get_project_info('long_info', $post->post_content)); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; */ ?>

<div class="box">
	<img src="<?php echo _p()?>/images/empty.gif" class="green-leaves" alt="" />
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt two-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-left welcome">
				<div class="portfolio">
					<h2>Our Portfolio</h2>
					<div class="cl">&nbsp;</div>
					<ul>
						<?php if (have_posts()) : while (have_posts()) : the_post(); $link = _get_field($post->ID, 'url');?>
							<li>
								<div class="cl">&nbsp;</div>
						    	<div class="image"><a href="<?php echo $link?>"><?php echo _get_project_info('image', $post->post_content)?></a></div>
								<div class="info">
									<h3><?php echo $post->post_title?></h3>
									<div class="entry">
										<?php echo apply_filters('the_content', _get_project_info('short_info', $post->post_content))?>
									</div>
									<p class="more">
										<a href="<?php echo $link?>" rel="nofollow"><span>view live</span></a>
									</p>
								</div>
								<div class="cl">&nbsp;</div>
								<div class="long-info">
									<h3>Case Study</h3>
									<div class="entry">
										<?php echo apply_filters('the_content', _get_project_info('long_info', $post->post_content)); ?>
									</div>
								</div>
						    </li>
						<?php endwhile; endif; ?>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<div class="side-right">
				<h2>More Projects</h2>
				<div class="small-thumbnails">
					<div class="cl">&nbsp;</div>
					<ul>
						<?php
						$portfolio = _get_page_by_name('portfolio');
						$projects = get_pages('child_of=' . $portfolio->ID . '&sort_column=menu_order,post_title&sort_order=asc');
						?>
						<?php foreach($projects as $p) : ?>
							<li><a href="<?php echo get_permalink($p->ID)?>"><?php echo _get_project_info('small_image', $p->post_content)?></a></li>
						<?php endforeach; ?>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>


<?php get_footer(); ?>
