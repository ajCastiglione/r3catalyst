<?php
/*
 Template Name: Internal Pages
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header large-wrapper">
									<h1 class="page-title page-<?php global $post; echo $post->post_name; ?>-title"><?php the_title(); ?></h1>
								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php if(is_page(9)) : get_template_part('partials/content', 'education'); endif; ?>
									<?php if(is_page(11)) : get_template_part('partials/content', 'why'); endif; ?>
									<?php if(is_page(13)) : get_template_part('partials/content', 'about'); endif; ?>
									<?php if(is_page(17)) : get_template_part('partials/content', 'contact'); endif; ?>
								</section>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
