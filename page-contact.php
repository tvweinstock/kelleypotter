<?php /* Template Name: Contact Page */ get_header();  ?>

<div class="section">
  <div class="innerWrapper">
  <div class="full">

      <h3><?php the_title(); ?></h3>
      <span class="dividerSmall"></span>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; // end the loop?>

    </div> <!-- /.full -->
  </div> <!-- /.section -->
  <?php get_footer(); ?>