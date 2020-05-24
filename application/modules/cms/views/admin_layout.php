<?php $this->load->view('_head'); ?>

<div class="container">
  <?php echo img(array('src' => 'assets/img/logo.png', 'width' => 42)); ?>
  <nav>
    <?php echo anchor('posts', '<i class="fa fa-clipboard" aria-hidden="true"></i> Posts'); ?>
    | <?php echo anchor('pages', '<i class="fa fa-pagelines" aria-hidden="true"></i> Pages'); ?>
    | <?php echo anchor('logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> Log out'); ?>
    | <?php echo anchor('.', '<i class="fa fa-chrome" aria-hidden="true"></i> My Site', 'target="_blank"'); ?>
  </nav>

  <?php echo $content; ?>
</div>

<style>
  .container img {
    margin-top: 10px;
  }
  .container nav {
    margin: 10px 0;
  }
</style>