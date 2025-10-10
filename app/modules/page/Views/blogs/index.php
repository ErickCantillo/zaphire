<style>
  .blogs-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 4vh;
    padding: 2vh 4vw;
  }
</style>
<?php echo $this->banner ?>
<div class="contenido-nosotros contenido-interna overflow-hidden">
  <?php echo $this->contenido ?>
  <div class="blogs-container">
    <?php foreach ($this->blogs as $blog): ?>
      <?php include(APP_PATH . "modules/page/Views/blogs/blogCard.php"); ?>
    <?php endforeach; ?>
  </div>
</div>