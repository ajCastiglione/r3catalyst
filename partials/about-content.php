<div class="about">
  <div class="large-wrapper">
    <h2 class="title"><?php echo get_field('team_title'); ?></h2>
    <div class="content">
      <?php echo get_field('team_content'); ?>
    </div>

    <div class="team">
      <?php if(have_rows('members')) : while(have_rows('members')) : the_row(); ?>
        <div class="member">
          <?php $img=get_sub_field('image'); if(!empty($img)) {echo "<img src='$img[url]' alt='$img[alt]' class='img'>";} ?>
          <h3 class="mtitle"><?php echo get_sub_field('name'); ?></h3>
          <h4 class="position"><?php echo get_sub_field('position'); ?></h4>
          <div class="bio">
            <?php echo get_sub_field('bio'); ?>
          </div>
          <a href="#" class="button" data-person="<?php echo strtr(explode(' ',trim(get_sub_field('name')))[0], array('.' => '')); ?>">learn more</a>
          <div class="socials">
            <?php if(have_rows('socials')) : while(have_rows('socials')) : the_row(); ?>
              <a href="<?php echo get_sub_field('url');?>" class="icon" target="_blank">
                <?php echo get_sub_field('icon'); ?>
              </a>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <!-- Single view -->
        <?php $data = strtr(explode(' ',trim(get_sub_field('name')))[0], array('.' => '')); ?>
        <div class="member-single" id="<?php echo $data  ?>">
          <div class="inner-single">
            <a class="close" href="#" data-close="<?php echo $data ?>"><i class="fas fa-times"></i></a>
            <div class="flex">
              <div class="image">
                <?php $img=get_sub_field('larger_image'); if(!empty($img)) {echo "<img src='$img[url]' alt='$img[alt]' class='img'>";} ?>
              </div>
              <div class="mscontent">
                <h3 class="mstitle"><?php echo get_sub_field('name'); ?></h3>
                <div class="flex">
                <h4 class="msposition"><?php echo get_sub_field('position'); ?></h4>
                  <div class="socials">
                    <?php if(have_rows('socials')) : while(have_rows('socials')) : the_row(); ?>
                      <a href="<?php echo get_sub_field('url');?>" class="icon" target="_blank">
                        <?php echo get_sub_field('icon'); ?>
                      </a>
                    <?php endwhile; endif; ?>
                  </div>
                </div>
                <div class="msbio">
                  <?php echo get_sub_field('bio'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>