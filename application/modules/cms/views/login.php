<?php $this->load->view('_head'); ?>

<div class="container-login">
  <h3>Login</h3>
  <?php if ($message): ?>
    <p class="alert alert-warning"><?php echo $message; ?></p>
  <?php endif; ?>
  <?php echo form_open('cms/login'); ?>
  <p>Username<br>
    <?php echo form_input('username', $this->input->post('username'), 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('username'); ?>
  </p>
  <p>Password<br>
    <?php echo form_password('password', '', 'class="form-control form-control-sm"'); ?>
    <?php echo form_error('password'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Login', 'class="btn btn-sm btn-secondary"'); ?>
  </p>
  <?php echo form_close(); ?>
</div>