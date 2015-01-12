<?php /* Template Name: No Sidebar Template */ get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="left">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
  <?php get_footer(); ?>