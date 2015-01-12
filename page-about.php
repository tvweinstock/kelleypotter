<?php /* Template Name: About Page */ get_header();  ?>

<div class="section">
  <div class="innerWrapper aboutWrapper">
  <h3><?php the_title(); ?></h3>
  <span class="dividerSmall"></span>
    <div class="full light-body">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
  <?php get_footer(); ?>