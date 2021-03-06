<h3>Add page</h3>
<?php echo form_open('pages/add'); ?>
<p>Title<br>
  <?php echo form_input('title', $this->input->post('title'), 'class="form-control form-control-sm"'); ?>
  <?php echo form_error('title'); ?>
</p>
<p>Teaser<br>
  <?php echo form_input('teaser', $this->input->post('teaser'), 'class="form-control form-control-sm"'); ?>
  <?php echo form_error('teaser'); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content', $this->input->post('content'), 'class="summernote"'); ?>
  <?php echo form_error('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes', 'class="btn btn-sm btn-secondary"'); ?>
  or <?php echo anchor('pages', 'cancel'); ?>
</p>
<?php echo form_close(); ?>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function () {
      $('.summernote').summernote({
        height: 400
      });
    });
</script>