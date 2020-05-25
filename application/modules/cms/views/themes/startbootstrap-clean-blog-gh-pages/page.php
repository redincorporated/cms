<!-- Page Header -->
<header class="masthead" style="background-image: url('themes/startbootstrap-clean-blog-gh-pages/img/about-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1><?php echo $page->title; ?></h1>
          <span class="subheading"><?php echo $page->teaser; ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php echo $page->content; ?>
    </div>
  </div>
</div>