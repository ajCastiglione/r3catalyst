			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="large-wrapper cf">

					<div class="footer-logo footer-item">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo_footer.png" alt="R3Catalyst Partners" class="img">
						<h3>&copy; R<sup>3</sup>Catalyst Partners <?php echo date('Y'); ?></h3>
					</div>
					<div class="footer-add footer-item">
						<?php echo get_field('address', 'options'); ?>
					</div>
					<div class="footer-nav footer-item">
						<nav class="footer-navigation">
						<?php wp_nav_menu(array(
										'container' => false,                           // remove nav container
										'container_class' => 'footer-menu cf',					// class of container (should you choose to use it)
										'menu' => __( 'Footer Nav', 'bonestheme' ),  		// nav name
										'menu_class' => 'footer-menu footer-links cf',   // adding custom nav class
										'theme_location' => 'main-nav',                 // where it's located in the theme
							)); ?>
						</nav>
					</div>
					<!-- <div class="footer-news footer-item">
						<h3>Subscribe to our newsletter</h3>
						<div class="dummy-fields">
							<input type="text" name="email" id="email" placeholder="Email Address">
							<input type="submit" value="ok">
						</div>
					</div> -->
					<div class="footer-links footer-item">
						<?php echo get_field('securities', 'options'); ?>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
        

	</body>

</html> <!-- end of site. what a ride! -->

