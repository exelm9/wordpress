<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Theme</title>
	<!-- connects wordpress hooks -->
		<?php wp_head(); ?>
	
</head>

<body>
<header>
	<!-- grabs first menu available.  If want to preload other menus, have to understand paramters passed -->
	<?php wp_nav_menu(array('theme_location'=>'main')); ?>
</header>
