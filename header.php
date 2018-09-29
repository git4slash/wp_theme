<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package finleap
	 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'finleap' ); ?></a>

    <figure class="header-image">
	    <?php the_header_image_tag(); ?>
    </figure><!-- .header-image -->

    <header id="masthead" class="site-header">

		<?php get_template_part( 'template-parts/header/site', 'branding' /* Logo, title and main menu */ ); ?>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'finleap' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
