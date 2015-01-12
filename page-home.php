<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

<div class="full">
  <!-- HERO STARTS HERE -->
  <div class="hero">

    <h3><?php bloginfo('description'); ?></h3>
    <span class="dividerSmall"></span>


  </div>
  <!-- HERO ENDS HERE -->
  <div class="innerWrapper home">

    <div class="main-img-container">
      <img src="<?php  bloginfo("template_directory"); ?>/i/main-page-square.jpg">
    </div>

    <div class="welcome">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
    
  </div> <!-- .innerWrapper -->
</div> <!-- .section -->

<?php get_footer(); ?>