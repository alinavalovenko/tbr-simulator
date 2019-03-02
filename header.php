<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package tbr
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="site-wrapper container-fluid" style="background-image: url(<?php echo TBR_IMAGES . '_bg.gif'?>);">
    <header class="row">
        <div class="col-sm-2"><img src="<?php echo TBR_IMAGES . 'Juva.jpg' ?>"
                                   alt="Thoroughbred Racing Simulator is an exciting new weapon for Handicappers of Thoroughbred Horse Racing.">
        </div>
        <div class="col-sm-8">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="site-description"><?php echo get_bloginfo('description', 'display');  ?></span>
                    <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                </a>
            </div>
        </div>
        <div class="col-sm-2 text-right"><img src="<?php echo TBR_IMAGES . 'rush.jpg' ?>"
                                   alt="Thoroughbred Racing Simulator uses a combination of quantified relative strengths of the entries in a horse race and Monte Carlo Simulation to predict the win probability of each entry and the odds that should be accepted to make the risk of betting on a particular entry worthwhile.">
        </div>
    </header>
    <div class="row">
		<?php echo wp_nav_menu( array(
			'theme_location' => 'primary-menu'
		) ); ?>
    </div>