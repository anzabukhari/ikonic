<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="main-header">
<div class="container-fluid">
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4">
	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	</div>
	<div class="col-xl-8 col-lg-8 col-md-8">
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>
	</div>
	</div>
</div>
</header><!-- #masthead -->
