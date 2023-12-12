<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * Yes, this is taken from the Twenty Seventeen theme.
 *
 * @since 20231212
 * @author Josh Robbs <josh@joshrobbs.com>
 * @package JWR_Theme_2024
 */

use function JWR_Theme_2024\site_name;

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'jwr-theme-2024' );
		?>
	</a>

	<header id="masthead" class="site-header">
		<?php site_name(); ?>
		<nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
