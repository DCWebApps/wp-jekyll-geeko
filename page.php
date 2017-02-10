<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-jekyll
 */

get_header(); 
while ( have_posts() ) : the_post(); ?>

<div id="header-big-imgs" data-num-img="1" data-img-src-1=""></div>

<?php if ( has_post_thumbnail() ) { ?>
<header class="header-section has-img">
    <div class="big-img intro-header" style="background-image: url(<?php echo the_post_thumbnail_url( 'post-banner' ); ?>);">
<?php } 
else { ?>
<header class="header-section">  
    <div class="no-img intro-header">
<?php } ?>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title() ?></h1>	    
                        <h2 class="post-subheading"></h2>
                        <span class="post-meta"> <?php the_date( 'F j, Y', 'Posted on: ', '', true ); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <span class="img-desc" style="display: none;"></span>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <article role="main" class="blog-post">
                <?php the_content(); ?>
	    </article>

        </div>

    </div>
</div>


    <?php endwhile;
get_footer();
