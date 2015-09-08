<footer class="footer">
	<strong>&copy; By MLH</strong><small>2015</small>
	<?php
		wp_nav_menu(
			array(
				'theme_location' 	=> 'menu-footer',
				'containier'		=> 'nav',
				'container_class'	=> 'nav--footer',
				'menu_class'		=> 'nav--footer__list'

			)
		);
		
	?>
</footer>

<?php wp_footer(); ?>

</body>
</html>