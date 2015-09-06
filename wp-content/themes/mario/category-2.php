<?php get_header(); ?>
<body class="body">

<header class="header">
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('description'); ?></h2>
</header>

<section class="content">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<article class="container__item">
			<header>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="datos">
					<strong><?php the_author(); ?></strong> -
					<small><?php the_date(); ?></small>
				</div>
			</header>
			<figure>
				<?php the_post_thumbnail('my-size'); ?>
			</figure>
			<?php the_excerpt();  ?>
			<?php the_category(); ?>
		</article>
		

	<?php endwhile; ?>

	<?php else: ?>	

	<?php endif; ?>

</section>

<?php get_footer('negro'); ?>