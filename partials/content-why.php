<div class="why-real-estate">
  <section class="top large-wrapper section">
    <div class="flex">
      <div class="content">
        <p class="phrase"><?php echo get_field('phrase'); ?></p>
        <?php echo get_field('bullet_points'); ?>
      </div>
      <div class="image">
        <?php $img=get_field('image'); if(!empty($img)) : echo "<img src='$img[url]'>"; endif; ?>
      </div>
    </div>
  </section>
</div>