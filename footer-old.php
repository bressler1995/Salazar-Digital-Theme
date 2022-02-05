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
			<?php 
			
				$sdigital_phone = get_theme_mod('sdigital_setting_phone', '(000) 000-0000');
				$sdigital_address = get_theme_mod('sdigital_setting_address', '1172 Murphy Avenue, Suite #208 San Jose, CA');
				$sdigital_email = get_theme_mod('sdigital_setting_email', 'hello@salazardigital.net');

				if($sdigital_phone == '' || empty($sdigital_phone) == true) {
					$sdigital_phone = '(000) 000-0000';
				}

				if($sdigital_address == '' || empty($sdigital_address) == true) {
					$sdigital_address = '1172 Murphy Avenue, Suite #208 San Jose, CA';
				}

				if($sdigital_email == '' || empty($sdigital_email) == true) {
					$sdigital_email = 'hello@salazardigital.net';
				}
			
			?>
				<div class="sdigital_menu_contactinfo">
					<div class="sdigital_menu_contactinfo_item">
						<div class="thetitle">
							<span><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/map.svg' ?>"></span>
							<h4>Our Location</h4>
						</div>
						<div class="theinfo">
							<p><?php echo $sdigital_address?></p>
						</div>
					</div>
					<div class="sdigital_menu_contactinfo_item">
						<div class="thetitle">
							<span><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/phone-call.svg' ?>"></span>
							<h4>Call Us</h4>
						</div>
						<div class="theinfo">
							<p><a href="<?php echo 'tel:' . $sdigital_phone ?>">
								<?php echo $sdigital_phone ?>
							</a></p>
						</div>
					</div>
					<div class="sdigital_menu_contactinfo_item">
						<div class="thetitle">
							<span><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/email.svg' ?>"></span>
							<h4>Email Us</h4>
						</div>
						<div class="theinfo">
							<p><a href="<?php echo 'mailto:' . $sdigital_email ?>">
							<?php echo $sdigital_email ?>
							</a></p>
						</div>
					</div>
				</div>
		</div>
	</div>
	<button id="sdigital_menu_close" class="sdigital_menu_close"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/cancel.svg' ?>"></button>
</div>

</body>
</html>
