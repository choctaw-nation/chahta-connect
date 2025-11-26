<?php
/**
 * Basic Footer Template
 *
 * @package ChoctawNation
 */

?>

<footer class="footer text-bg-primary py-3">
	<div class="container d-flex flex-column align-items-center row-gap-4">
		<div class="row justify-content-center gx-0">
			<a href="<?php echo esc_url( site_url() ); ?>" class="logo d-block">
				<figure class="logo-img mb-0 h-100">
					<?php cno_echo_svg( '/img/logo-white.svg', 'Chahta Connect Logo' ); ?>
				</figure>
			</a>
		</div>
		<?php
		if ( has_nav_menu( 'footer_menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'footer_menu',
					'menu_class'      => 'footer-nav list-unstyled navbar-nav flex-column flex-md-row flex-wrap flex-grow-1 w-100 gap-4 d-flex justify-content-evenly',
					'container'       => 'nav',
					'container_class' => 'navbar w-100 align-self-center',
					'depth'           => 1,
				)
			);
		}
		?>
		<div class="row">
			<div class="col text-center" id="copyright">
				<p class="mb-0 fs-root">&copy;
					<?php echo '&nbsp;' . gmdate( 'Y' ); ?> <a class="fs-root" href="https://www.choctawnation.com" target="_blank">Choctaw Nation of Oklahoma</a>
				</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>