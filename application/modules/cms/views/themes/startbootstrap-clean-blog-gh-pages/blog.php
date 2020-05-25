<div class="container">
  <?php foreach (get_posts() as $post): ?>
    <h4 class="date"><?php echo date('M j', strtotime($post->date)); ?></h4>
    <h3><?php echo anchor('post/' . $post->id, $post->title); ?></h3>
    <p>By <?php echo $post->username; ?></p>
    <p><?php echo $post->teaser; ?></p>
  <?php endforeach; ?>
</div>
