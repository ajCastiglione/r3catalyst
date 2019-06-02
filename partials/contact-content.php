<section class="contact">
  <div class="large-wrapper">
    <div class="flex">
      <div class="left">
        <img src="<?php echo get_template_directory_uri() .'/library/images/contact_pg_trees.jpg';?>" alt="R3Catalyst Emblem" class="img">
      <p class="content"><!--440 Stevens Ave, Suite 200 <br/> Solana Beach, CA 92075 <br/> --><a href="tel:+1 858 756 6214">+1 858 756 6214</a></p>
      </div>
      <div class="right">
        <h3 class="form-title"><?php echo get_field('form_title'); ?></h3>
        <div class="form">
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>