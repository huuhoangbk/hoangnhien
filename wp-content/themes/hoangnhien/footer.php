		</div>
		<div id="footer">
			<div class="box">
				<div class="box-t">&nbsp;</div>
				<div class="box-c">
					<div class="box-cnt">
						<div class="right">
							<p>&copy; <?php echo date('Y')?> <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></p>
							<p>design by <a href="http://cssmayo.com">cssmayo.com</a>, release by <a href="http://www.smashingmagazine.com">Smashing Magazine</a>, powered by <a href="http://wordpress.org">WordPress</a></p>
						</div>	
						<div class="footer-nav">
							<ul>
							    <?php wp_list_pages('title_li=&depth=1'); ?> 
							</ul>
						</div>
					</div>
				</div>
				<div class="box-b">&nbsp;</div>
			</div>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>