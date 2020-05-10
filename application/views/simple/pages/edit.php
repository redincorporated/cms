<h3>Edit page</h3>
<?php echo form_open('pages/edit/' . $page->id); ?>
<p>Title<br>
  <?php echo form_input('title', $page->title); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Content<br>
  <?php echo form_input('content', $page->content); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('pages', 'cancel'); ?>
</p>
<?php echo form_close(); ?>