<?php get_header(); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo get_theme_file_uri('build/assets/img/home-bg.jpg'); ?>')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
  <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
      <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 10
        ));
      
        while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post();
      ?>
      <!-- Post preview-->
      <div class="post-preview">
        <a href="<?php the_permalink(); ?>">
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p><?php the_time('Y/m/d'); ?></p>
          <h3 class="post-subtitle"><?php echo wp_trim_words(get_the_content(), 10); ?></h3>
        </a>
        <p class="post-meta">
          <a href="<?php the_permalink(); ?>">Read more</a>
        </p>
      </div>
      <!-- Divider-->
      <hr class="my-4" />
      <?php
        }
      ?>
      <!-- Pagination -->
      <?php echo paginate_links(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>