<?php section('_header_white'); ?>

<!-- Breadcrumb Area-->
<div class="breadcrumb-area bg-img bg-black-overlay section_padding_130" style="background-image: url(themes/apland-4.3.0/img/bg-img/testimonials.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-xl-6">
        <div class="breadcrumb-content text-center">
          <h2>Blog Details</h2>
          <p>For 5 years we have been developing for providing better services.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Area-->
<div class="apland-blog-area section_padding_130_80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-9 col-lg-8">
        <!-- Blog Post Area-->
        <div class="single-blog-post">
          <span class="post-date"><?php echo date('j M y', strtotime($post->date)); ?></span>
          <h1 class="mb-3"><?php echo $post->title; ?></h1>
          <div class="post-meta mb-5">
            <a class="post-author" href="#">By <?php echo $post->username; ?></a>
            <a class="post-tutorial" href="#">Tutorials</a>
          </div>
          <img class="post-thumbnail" src="themes/apland-4.3.0/img/blog-img/1.jpg" alt="">
          <?php echo $post->content; ?>
        </div>
        <!-- Comments Area-->
        <div class="comment_area mb-50 clearfix">
          <?php $comments = get_post_comments($post->id); ?>
          <h4 class="mb-4"><?php echo count($comments); ?> Comments</h4>
          <ol>
            <?php foreach ($comments as $comment): ?>
              <li class="single_comment_area">
                <div class="comment-content d-flex">
                  <div class="comment-author">
                    <img src="themes/apland-4.3.0/img/advisor-img/testimonial-1.jpg" alt="author">
                  </div>
                  <div class="comment-meta">
                    <a class="post-date" href="#"><?php echo date('j M y', strtotime($comment->date)); ?></a>
                    <h6><?php echo $comment->name; ?></h6>
                    <p><?php echo $comment->comments; ?></p>
                    <!--                    <a class="like mr-2" href="#">Like</a>
                                        <a class="reply" href="#">Reply</a>-->
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>
        <!-- Leave A Reply-->
        <div class="contact-area mb-50">
          <h4 class="mb-4">Leave A Comment</h4>
          <!-- Form-->
          <?php echo form_open('leave_comment/' . $post->id, array('class' => 'contact_from')); ?>
          <div class="row">
            <div class="col-12 col-lg-6">
              <?php echo form_input('name', '', 'class="form-control mb-30" placeholder="Your Name"'); ?>
            </div>
            <div class="col-12 col-lg-6">
              <?php echo form_input('email', '', 'class="form-control mb-30" placeholder="Email"'); ?>
            </div>
            <div class="col-12">
              <?php echo form_textarea('comments', '', 'class="form-control mb-30" cols="30" rows="10" placeholder="Type your comments..."'); ?>
            </div>
            <div class="col-12">
              <?php echo form_submit('submit', 'Post Comment', 'class="btn apland-btn"'); ?>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
