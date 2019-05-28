<div class="education">
  <section class="top large-wrapper section">
    <div class="content">
      <?php if(have_rows('edu_content')) : while(have_rows('edu_content')) : the_row(); ?>
        <div class="single">
          <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
          <div class="text"><?php echo get_sub_field('content'); ?></div>
        </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri().'/library/images/edu-content.png';?>" alt="Education On Opportunity" class="img">
    </div>
  </section>

  <section class="middle">
    <div class="timeline large-wrapper section">
      <h2 class="title"><?php echo get_field('timeline_title'); ?></h2>
      <p class="text"><?php echo get_field('timeline_text'); ?></p>
      <?php echo do_shortcode('[cool-timeline layout="horizontal" category="timeline-stories" skin="dark" designs="design-2" show-posts="20" order="ASC" items="3" icons="YES" story-content="full" date-format="default" based="custom" autoplay="false" start-on="0"]'); ?>
    </div>
  </section>

  <section class="table-section">
    <div class="table large-wrapper section">
      <h2 class="title"><?php echo get_field('table_title'); ?></h2>
      <p class="text"><?php echo get_field('table_text'); ?></p>
      <div class="table-container">
        <?php echo do_shortcode('[table id=1 /]'); ?>
      </div>
    </div>
  </section>

  <section class="case-studies-section">
    <div class="case-studies large-wrapper section">
      <h2 class="title"><?php echo get_field('case_studies_title'); ?></h2>
      <p class="text"><?php echo get_field('case_studies_text'); ?></p>
      <div class="flex">
        <div class="content">
          <?php if(have_rows('case_studies_content')) : while(have_rows('case_studies_content')) : the_row(); ?>
            <div class="single">
              <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
              <div class="text"><?php echo get_sub_field('text'); ?></div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="image">
          <?php $img=get_field('case_studies_image'); if(!empty($img)) : echo "<img src='$img[url]'>"; endif; ?>
        </div>
      </div>
      <div class="table">
        <h2 class="title"><?php echo get_field('case_studies_table_title'); ?></h2>
        <?php echo do_shortcode('[table id=2 /]'); ?>
        <p class="disclaimer"><?php echo get_field('case_studies_table_disclaimer'); ?></p>
      </div>
      <div class="conclusion">
        <h2 class="subtitle"><?php echo get_field('case_studies_conclusions_title'); ?></h2>
        <div class="content">
          <?php echo get_field('case_studies_conclusions_content'); ?>
        </div>
      </div>
    </div>
  </section>
</div>