<?php
/**
 * Template Name: Header, No Footer
 * Description: A blank page without a footer
 *
 * @package ChoctawNation
 */

get_header();
?>
<div <?php post_class( 'has-global-padding alignfull is-layout-constrained' ); ?>>
	<?php the_content(); ?>
</div>
<?php wp_footer(); ?>
</body>

</html>
