<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>
<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "dCJH30K60M");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

<div id="sdigital_menuholder" class="sdigital_menuholder">
	<div class="sdigital_container">
		<div class="sdigital_container_column">
			<h3>Menu</h3>
			<?php
				$menumarkdown = '';
        
				if ( has_nav_menu('menu-1')) {
					$menumarkdown .= wp_nav_menu(array( 'theme_location' => 'menu-1',
								'menu_class' => 'eccent_desktop_menu',
								'menu_id' => 'eccent_desktop_menu'
					)); 
				}

				echo $menumarkdown;
			?>
		</div>
		<div class="sdigital_container_column">

		</div>
	</div>
	<button id="sdigital_menu_close" class="sdigital_menu_close"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/cancel.svg' ?>"></button>
</div>

</body>
</html>
