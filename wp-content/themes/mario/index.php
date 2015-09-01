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

<section class="content">
	<?php rewind_posts(); ?>
	<?php query_posts('order=Asc&cat=2') ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<article>
			<header>
				<h3><?php the_title(); ?></h3>
				<div class="datos">
					<strong><?php the_author(); ?></strong> -
					<small><?php the_date(); ?></small>
				</div>
			</header>
			<?php the_excerpt();  ?>
			<?php the_category(); ?>
		</article>
		

	<?php endwhile; ?>

	<?php else: ?>	

	<?php endif; ?>

</section>
</body>
</html>