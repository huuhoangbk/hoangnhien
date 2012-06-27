<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="box">
	<img src="<?php bloginfo('template_directory')?>/images/empty.gif" class="green-leaves" alt="" />
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt two-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-left welcome">
				<h2>Welcome to our site</h2>
				<?php $home_page = _get_page_by_name('home'); ?>
				<p><?php echo $home_page->post_content;?></p>
			</div>
			<div class="side-right">
				<h2>Services</h2>
				<?php $services_page = _get_page_by_name('services'); ?>
				
				<p><?php echo _get_short_info($services_page->post_content)?></p>
				<p class="more"><a href="<?=get_permalink($services_page->ID)?>"><span>read more</span></a></p>
			</div>
			<div class="cl">&nbsp;</div>
			
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>

<div class="portfolio-box">
	<div class="portfolio-box-bg">
		<div class="portfolio-box-cnt">
			<h2 class="nobg">Our Work</h2>
			<div class="projects">
				<ul>
					<?php 
					$portfolio = _get_page_by_name('portfolio');
					
					$projects = get_pages('child_of=' . $portfolio->ID . '&sort_column=menu_order,post_title&sort_order=asc&number=4');
					
					foreach($projects as $p) : 
						$link = get_permalink($p->ID); 
						$project_url = _get_field($p->ID, 'url');
					?>
						<li>
					    	<div class="image"><a href="<?=$link?>"><?=_get_project_info('image', $p->post_content)?></a></div>
							<div class="info">
								<a href="<?php echo $project_url?>" rel="nofollow" class="view">view live</a>
								<h3><a href="<?php echo $link?>"><?php echo $p->post_title?></a></h3>
							</div>
					    </li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="box">
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt two-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-left">
				<h2>Blog Spot</h2>
				<div class="post">
					<?php $latest_post = _get_latest_post(); $link = get_permalink($latest_post->ID);?>
					<h2><a href="<?php echo $link?>"><?php echo $latest_post->post_title?></a></h2>
					<small><?php echo _format_date($latest_post->post_date)?></small>
					<div class="entry"><?php echo apply_filters('the_content', _get_short_info($latest_post->post_content)); ?></div>
					<div class="postmeta more">
						<a href="<?php echo $link?>"><span>read more</span></a>
						<a href="<?php echo $link?>#comments"><span><?php echo $latest_post->comment_count?> comments</span></a>
					</div>
				</div>
			</div>
			<div class="side-right headlines">
				<h2>Headlines</h2>
				<ul>
					<?php echo _list_latest_posts();?>
				</ul>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>

<div class="box">
	<img src="<?php echo _p()?>/images/empty.gif" class="green-leaves" alt="" />
	<div class="box-t">&nbsp;</div>
	<div class="box-c">
		<div class="box-cnt three-columns">
			<div class="cl">&nbsp;</div>
			<div class="side-eq">
				<h2>More of our work</h2>
				<div class="small-thumbnails">
					<div class="cl">&nbsp;</div>
					<ul>
						<?php
						$projects = get_pages('child_of=' . $portfolio->ID . '&sort_column=menu_order,post_title&sort_order=asc&number=16');
						?>
						<?php foreach($projects as $p) : ?>
							<li><a href="<?php echo get_permalink($p->ID)?>"><?php echo _get_project_info('small_image', $p->post_content)?></a></li>
						<?php endforeach; ?>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<div class="side-eq side-center">
				<?php $latest_project = _get_latest_project($portfolio->ID); ?>
				<h2><?php echo $latest_project->post_title?> Case study </h2>
				<p><?php echo _get_project_info('short_info', $latest_project->post_content); ?></p>
				<p class="more"><a href="<?php echo get_permalink($latest_project->ID)?>"><span>read more</span></a></p>
			</div>
			<div class="side-eq">
				<h2>Your Project</h2>
				<p><strong class="white">Interested in hiring us?</strong><br />Feel free to download and return our <a href="#">project questionnaire</a>. </p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<div class="box-b">&nbsp;</div>
</div>


<?php get_footer(); ?>
