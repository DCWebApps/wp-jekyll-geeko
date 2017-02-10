<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-jekyll
 */

?>
    <article class="post-preview">
        <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '<h3></h3></a></h2>' ); ?>
        <p class="post-meta">Posted on <?php the_date( 'F j, Y', 'Posted on: ', '', true ); ?></p>
        <div class="post-entry"><?php the_content() ?></div>
    </article>

