<?php
/**
 * The primary archive page.
 *
 * Included for historical reasons. This file is not used in the theme.
 *
 * @package ChoctawNation
 */

get_header();
?>
<main <?php post_class(); ?> style="margin-block:var(--wp--preset--spacing--xl);">
	<?php the_content(); ?>
</main>
<?php
get_footer();
