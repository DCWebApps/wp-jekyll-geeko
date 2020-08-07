<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-jekyll-geeko
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            </ul>
        </div>
        <div class="avatar-container">
            <div class="avatar-img-border">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<!--                <img class="avatar-img" src="" />-->
                <?php the_header_image_tag(); ?>
            </a>
            </div>
        </div>
    </div>
</nav>
<?php if ( !is_single() && !is_404() ) : ?>
<header class="header-section" role="banner">
    <div class="intro-header no-img">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="page-heading">
                <h1><?php bloginfo( 'name' ); ?></h1>
                  <hr class="small">
                  <span class="page-subheading"><?php bloginfo('description'); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
</header>
<?php endif; ?>
