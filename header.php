<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Clean Blog - Start Bootstrap Theme</title>
  <?php wp_head(); ?>
</head>

<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="<?php echo site_url(''); ?>">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto py-4 py-lg-0">
        <li class="nav-item">
          <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('/'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('/term-of-use'); ?>">Term of Use</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('/about-us'); ?>">About US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>