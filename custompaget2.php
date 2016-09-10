<?php /* Template Name: CustomPageT2 */ ?>
<?php get_header(); ?>


<div style="background-color: #ffffff; color: #000000; padding-top: 30px" class="text-center">
<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; // end of the loop. ?>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>