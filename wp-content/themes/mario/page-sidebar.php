<?php
/*
Template Name: Página con sidebar
*/
?>
<?php get_header(); ?>
<body class="table">

<section class="content sidebar">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article class="container__item">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>

	<?php else: ?>	

	<?php endif; ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>