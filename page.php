<?php get_header(); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo get_theme_file_uri('build/assets/img/about-bg.jpg'); ?>')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
  <div class="row gx-4 gx-lg-5 justify-content-center">
    <?php
      while(have_posts()) {
        the_post();
    ?>
    <div class="col-md-10 col-lg-8 col-xl-7">
      <a href="<?php the_permalink(); ?>">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <p><?php the_time('Y/m/d'); ?></p>
        <h3 class="post-subtitle"><?php echo get_the_content(); ?></h3>
      </a>
    </div>
    <?php
      }
    ?>
  </div>
</div>

<?php get_footer(); ?>