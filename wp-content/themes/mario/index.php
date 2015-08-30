<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory) ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>

<header class="header">
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('description'); ?></h2>
</header>

<ul>
	<li><?php bloginfo('name'); ?></li>
	<li><?php bloginfo('description'); ?></li>
	<li><?php bloginfo('wpurl'); ?></li>
	<li><?php bloginfo('admin_email'); ?></li>
	<li><?php bloginfo('charset'); ?></li>
	<li><?php bloginfo('version'); ?></li>
	<li><?php bloginfo('html_type'); ?></li>
	<li><?php bloginfo('language'); ?></li>
	<li><?php bloginfo('stylesheet_directory'); ?></li>
	<li><?php bloginfo('stylesheet_url'); ?></li>
</ul>
</body>
</html>