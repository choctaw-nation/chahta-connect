<?php
/**
 * Template Name: No Header, No Footer
 * Description: A blank page without a header and footer
 *
 * @package ChoctawNation
 */

?>
<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div <?php post_class( 'has-global-padding alignfull is-layout-constrained' ); ?>>
		<?php the_content(); ?>
	</div>
	<?php wp_footer(); ?>
</body>

</html>
