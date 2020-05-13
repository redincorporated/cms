<?php section('_header_white'); ?>

<!-- Breadcrumb Area-->
<div class="breadcrumb-area bg-img bg-black-overlay section_padding_130" style="background-image: url(public/themes/apland-4.3.0/img/bg-img/testimonials.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-xl-6">
        <div class="breadcrumb-content text-center">
          <h2>Blog Full</h2>
          <p>For 5 years we have been developing for providing better services.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Area-->
<div class="apland-blog-area section_padding_130">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-9 col-lg-8">
        <?php foreach ($posts as $post): ?>
          <!-- Single Blog Post Area-->
          <div class="single-blog-post mb-5">
            <div class="post-date"><?php echo $post->date; ?></div>
            <?php echo anchor('posts/show/' . $post->id, $post->title, 'class="post-title"'); ?>
            <img class="post-thumbnail" src="public/themes/apland-4.3.0/img/blog-img/1.jpg" alt="">
            <div class="post-meta">
              <a class="post-author" href="#">By Admin</a>
              <a class="post-tutorial" href="#">Tutorials</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, animi, numquam. Nam suscipit iste enim deleniti vitae facere earum doloribus, tempora alias quas voluptatibus aut, voluptates qui nihil, quisquam quos.</p><a class="btn apland-btn mt-3" href="blog-details-full.html">Continue Reading</a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="apland-blog-pagination">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i class="lni-chevron-left"></i></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="lni-chevron-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CTA Area-->
<!--<div class="cta-area section_padding_130_80">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-sm-8">
        <div class="cta-content mb-50">
          <h3 class="mb-0">Have questions, or want to talk about working with us?</h3>
        </div>
      </div>
      <div class="col-12 col-sm-4 text-sm-right"><a class="btn apland-btn btn-4 mb-50" href="#">Let's talk Us</a></div>
    </div>
  </div>
</div>-->