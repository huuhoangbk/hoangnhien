<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
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
						<?php 
						$projects = get_pages('child_of=' . $post->ID . '&sort_column=menu_order,post_title&sort_order=asc');
						
						foreach($projects as $p) : 
							$link = get_permalink($p->ID); 
							$project_url = _get_field($p->ID, 'url');
						?>
							<li>
								<div class="cl">&nbsp;</div>
						    	<div class="image"><a href="<?php echo $link?>"><?php echo _get_project_info('image', $p->post_content)?></a></div>
								<div class="info">
									<h3><a href="<?php echo $link?>"><?php echo $p->post_title?></a></h3>
									<div class="entry">
										<?php echo apply_filters('the_content', _get_project_info('short_info', $p->post_content))?>
									</div>
									<p class="more">
										<a href="<?php echo $link?>"><span>view case study</span></a>
										<a href="<?php echo $project_url?>" rel="nofollow"><span>view live</span></a>
									</p>
								</div>
								<div class="cl">&nbsp;</div>
						    </li>
						<?php endforeach; ?>
					</ul>
					<div class="cl">&nbsp;</div>
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