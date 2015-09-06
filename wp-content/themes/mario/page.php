<?php get_header(); ?>
<body>

<section class="content">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article class="container__item">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>

	<?php else: ?>	

	<?php endif; ?>

</section>

<?php get_footer(); ?>