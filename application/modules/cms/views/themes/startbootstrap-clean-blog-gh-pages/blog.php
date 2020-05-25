<!-- Page Header -->
<header class="masthead" style="background-image: url('themes/startbootstrap-clean-blog-gh-pages/img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach (get_posts() as $post): ?>
        <div class="post-preview">
          <?php echo anchor('post/' . $post->id, '<h2 class="post-title">' . $post->title . '</h2>
            <h3 class="post-subtitle">' . $post->teaser . '</h3>', ''); ?>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $post->username; ?></a>
            on <?php echo date('F d, Y', strtotime($post->date)); ?></p>
        </div>
        <hr>
      <?php endforeach; ?>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>