<?php get_header(); ?>
<body>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

	<?php endwhile; ?>

	<?php else: ?>	

	<?php endif; ?>



<?php get_footer(); ?>