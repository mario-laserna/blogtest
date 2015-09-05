<?php get_header(); ?>
<body>

<?php rewind_posts(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<header class="header">
	<h1><?php the_title(); ?></h1>
</header>
	<article>
		<header>
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

<?php get_footer(); ?>