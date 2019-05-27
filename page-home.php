<?php
/*
 Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="large-wrapper cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<!-- <header class="article-header">
									<h1 class="page-title"><?php //the_title(); ?></h1>
								</header> -->

								<section class="entry-content cf" itemprop="articleBody">
									<div class="image">
										<?php $img = get_field('content_image'); if(!empty($img)) : ?>
											<img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" class="img">
										<?php endif;?>
									</div>
									<div class="content">
										<?php the_content(); ?>
									</div>
								</section>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
