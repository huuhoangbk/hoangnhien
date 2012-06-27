<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<!--[if lte IE 6]>
		<style type="text/css" media="screen">
			input, textarea, select 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/box-c.png', sizingMethod='scale'); }
			
			.box-t 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/box-t.png', sizingMethod='image'); }
			
			.box-b 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/box-b.png', sizingMethod='image'); }
			
			.box-c 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/box-c.png', sizingMethod='scale'); }
			
			.leaves 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/leaves.png', sizingMethod='image'); }
			
			.green-leaves 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/green-leaves.png', sizingMethod='image'); }
			
			
			.portfolio-box-bg 
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/portfolio.png', sizingMethod='image'); }
			
			.projects ul li
			{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=_p()?>/images/project-bg.png', sizingMethod='image'); }
			#bg { height:900px;  }
			
			.projects ul li *{ position:relative; }
		</style>
	<![endif]-->
</head>
<body>
<div id="shell">
	<div id="bg">
		<div id="header">
			<div id="headerimg">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
			<div id="navigation">
				<ul>
				    <?php echo _generate_navigation(); ?>
				</ul>
			</div>
			<img src="<?php bloginfo('template_directory')?>/images/empty.gif" class="leaves" alt="" />
		</div>
		<div id="main">