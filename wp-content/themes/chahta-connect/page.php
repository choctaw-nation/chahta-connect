<?php
/**
 * A blank page.
 *
 * @package ChoctawNation
 */

get_header();
?>
<div <?php post_class( 'alignfull has-global-padding is-layout-constrained' ); ?> style="margin-block:var(--wp--preset--spacing--xl);">
	<?php the_content(); ?>
</div>
<?php
get_footer();
