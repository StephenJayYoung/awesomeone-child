<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Awesomeone
 */

get_header(); ?>

<div class="content-area">
    <div class="middle-align">
        <div class="site-main" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'single' ); ?>
                <?php awesomeone_content_nav( 'nav-below' ); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>