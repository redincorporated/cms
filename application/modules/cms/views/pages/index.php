<h3>Pages</h3>
<p><?php echo anchor('pages/add', 'Add page'); ?></p>
<table class="table">
  <tr>
    <th>Title</th>
    <th></th>
  </tr>
  <?php foreach ($pages as $page): ?>
    <tr>
      <td><?php echo $page->title; ?></td>
      <td>
        <?php echo anchor('pages/edit/' . $page->id, 'Edit'); ?>
        <a href='javascript:void(0);' onclick="deletePage('<?php echo $page->id; ?>', <?php echo $page->id; ?>);" title="Delete">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script>
    var url = '<?php echo base_url(); ?>';
    function deletePage(name, id) {
      var c = confirm('Do you really want to delete ' + name + '?');
      if (c === true) {
        window.location = url + 'pages/delete/' + id;
      } else {
        return false;
      }
    }
</script>