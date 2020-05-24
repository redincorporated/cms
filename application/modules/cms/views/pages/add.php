<h3>Add page</h3>
<?php echo form_open('pages/add'); ?>
<p>Title<br>
  <?php echo form_input('title', $this->input->post('title')); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content', $this->input->post('content')); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('pages', 'cancel'); ?>
</p>
<?php echo form_close(); ?>