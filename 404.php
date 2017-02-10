<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-jekyll
 */

get_header(); ?>

<header class="header-section">  
    <div class="no-img intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>error 404: page not found</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <article role="main" class="blog-post">
                The page you are looking for doesn't exist.<br />
                    Please, follow to <a href="/">Homepage</a>
	    </article>
        </div>
    </div>
</div>
 
<?php 
get_footer();
