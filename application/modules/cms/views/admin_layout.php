<?php $this->load->view('_head'); ?>

<div class="container">
  <?php echo img(array('src' => 'assets/img/logo.png', 'width' => 32)); ?>
  <nav>
    <?php echo anchor('posts', 'Posts'); ?>
    | <?php echo anchor('pages', 'Pages'); ?>
    | <?php echo anchor('logout', 'Log out'); ?>
    | <?php echo anchor('.', 'My Site'); ?>
  </nav>

  <?php echo $content; ?>
</div>