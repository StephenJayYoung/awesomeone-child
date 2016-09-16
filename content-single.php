<?php
/**
 * @package Awesomeone
 */
?>
<article class="text-center" id="post-<?php the_ID(); ?>"  <?php post_class('single-post'); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">

		<?php 
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb">';
            the_post_thumbnail();
			echo '</div><br />';
		}
        ?>

        <div style="padding: 30px">
            <div style="font-size: 35px; margin-bottom: 35px" class="text-center"><?php the_title(); ?></div>
            <div style="font-size: 22px; margin-bottom: 10px" class=" text-center post-date"><?php _e('By','awesomeone'); ?> <?php echo get_the_author(); ?></div><!-- post-date -->
            <div style="font-size: 19px; margin-bottom: 10px" class=" text-center post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
            <div style="font-size: 15px; margin-bottom: 10px" class="text-center post-comment"> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
            <div class="clear"></div>
        </div><!-- postmeta -->

        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'awesomeone' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
            <div class="post-categories"><?php the_category( __( ', ', 'awesomeone' ));?></div>
            <div class="post-tags"><?php the_tags(' | Tags: ', ', ', '<br />'); ?> </div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->
   
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'awesomeone' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->

</article>