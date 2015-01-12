<?php /* Template Name: Event Details Page */ get_header();  ?>

<div class="section">
  <div class="innerWrapper">
      <div class="event-heading-container">
        <?php if (is_page(73)){ ?>
        <h3 class="event-heading"> Funerals & Memorials </h3>
        <span class="dividerSmall"></span>
        <?php } elseif (is_page(66)) { ?>
        <h3 class="event-heading"> Weddings & Renewals of Vows </h3>
        <span class="dividerSmall"></span>
        <?php } ?>
        <div class="img-container">
          <?php if (is_page(73)){ ?>
          <img class="poppy" src="<?php bloginfo('template_directory'); ?>/i/poppy-blue-sm.png" />
          <?php } elseif (is_page(66)) { ?>
          <img class="rings" src="<?php bloginfo('template_directory'); ?>/i/wedding-rings-blue.png" />
          <?php } ?>
        </div>
      </div>
    <div class="full light-body">
      <div class="event-images">
        <?php if (is_page(73)){ ?>
        <img src="<?php bloginfo('template_directory'); ?>/i/funerals-page.jpg" />
        <?php } elseif (is_page(66)) { ?>
        <img src="<?php bloginfo('template_directory'); ?>/i/wedding-heart.jpg" />
        <?php } ?>
      </div>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
  <?php get_footer(); ?>