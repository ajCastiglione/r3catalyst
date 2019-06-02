<div class="blog-header">
  <div class="large-wrapper">
    <div class="flex">
      <div class="top">
      <h2 class="title"><?php echo get_field('page_title', get_option('page_for_posts')); ?></h2>
      <div class="content">
        <p><?php echo get_field('content', get_option('page_for_posts')); ?></p>
      </div>
      </div>
      <div class="bottom">
        <img src="<?php echo get_template_directory_uri().'/library/images/Press_Header_Image.png'; ?>" alt="Press Image" class="img">
      </div>
    </div>
  </div>
</div>