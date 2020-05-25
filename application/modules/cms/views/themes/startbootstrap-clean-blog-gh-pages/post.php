<!-- Page Header -->
<header class="masthead" style="background-image: url('themes/startbootstrap-clean-blog-gh-pages/img/post-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $post->title; ?></h1>
          <h2 class="subheading"><?php echo $post->teaser; ?></h2>
          <span class="meta">Posted by
            <a href="#"><?php echo $post->username; ?></a>
            on <?php echo date('F d, Y', strtotime($post->date)); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo $post->content; ?>
      </div>
    </div>
  </div>
</article>

<hr>