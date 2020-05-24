<h3>Edit post</h3>
<?php echo form_open('posts/edit/' . $post->id); ?>
<p>Title<br>
  <?php echo form_input('title', $post->title); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content', $post->content); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('posts', 'cancel'); ?>
</p>
<?php echo form_close(); ?>