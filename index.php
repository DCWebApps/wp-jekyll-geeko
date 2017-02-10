<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-jekyll
 */

get_header(); ?>

	<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="container" role="main">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="posts-list">
                            
                            <?php   
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
                        
                            get_template_part( 'template-parts/content', get_post_format() );

                            endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
