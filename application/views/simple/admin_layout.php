<nav>
  <?php echo anchor('posts', 'Posts'); ?>
  | <?php echo anchor('pages', 'Pages'); ?>
  | <?php echo anchor('logout', 'Log out'); ?>
</nav>

<?php echo $content; ?>