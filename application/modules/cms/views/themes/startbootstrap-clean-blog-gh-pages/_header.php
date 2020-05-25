<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <?php echo anchor('.', 'Start Boostrap', 'class="navbar-brand"'); ?>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <?php echo anchor('.', 'Home', 'class="nav-link"'); ?>
        </li>
        <?php foreach (get_pages() as $page): ?>
          <li class="nav-item">
            <?php echo anchor('page/' . $page->id, $page->title, 'class="nav-link"'); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>