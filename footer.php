<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer grid-container" role="contentinfo">

					<div class="inner-footer grid-x grid-margin-x grid-padding-x">

						<div class="small-12 medium-12 large-12 cell">
							<nav role="navigation">
								<?php joints_footer_links(); ?>
							</nav>
						</div>

						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Made by <a href="https://surfaceimpression.digital">Surface Impression</a>.</small></p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<div class="reveal large" id="modal-accessibility" data-reveal>
			<br>
			<br>
			<div class="grid-container">

				<div class="grid-x grid-margin-x grid-padding-x">

					<div class="cell large-3">
						<p>These options can change the way this website looks, which may help you to use it more easily.</p>
					</div>

					<div class="cell auto">
						<p class="lead">Accessibility options</p>
						<br>
						<ul class="tabs" data-tabs id="access-tabs">
							<li class="tabs-title is-active"><a href="#contrast" aria-selected="true"><i class="fas fa-adjust"></i>&nbsp;&nbsp;Display contrast</a></li>
							<li class="tabs-title"><a href="#text"><i class="fas fa-text-height"></i>&nbsp;&nbsp;Text options</a></li>
						</ul>

						<div class="tabs-content" data-tabs-content="access-tabs">
							<br>
							<!-- Panel 1 -->
							<fieldset class="tabs-panel is-active" id="contrast">
								<legend class="show-for-sr">Contrast options</legend>
								<div class="grid-x grid-margin-x">
									<div class="cell small-8 medium-auto">
										<p>Standard contrast</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-standard.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-contrast-standard" type="radio" name="accessContrast" value="standard" checked>
													<label class="switch-paddle" for="access-contrast-standard">
														<span class="show-for-sr">Standard contrast toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
										<br>
									</div>
									<div class="cell small-8 medium-auto">
										<p>Low contrast</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-contrast-low.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-contrast-low" type="radio" name="accessContrast" value="low">
													<label class="switch-paddle" for="access-contrast-low">
														<span class="show-for-sr">Low contrast toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
										<br>
									</div>
									<div class="cell small-8 medium-auto">
										<p>High contrast</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-contrast-high.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-contrast-high" type="radio" name="accessContrast" value="high">
													<label class="switch-paddle" for="access-contrast-high">
														<span class="show-for-sr">High contrast toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
										<br>
									</div>
								</div>
							</fieldset>

							<!-- Panel 2 -->
							<fieldset class="tabs-panel" id="text">
								<legend class="show-for-sr">Text options</legend>
								<div class="grid-x grid-margin-x">
									<div class="cell small-8 medium-auto">
										<p>Standard text</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-standard.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-text-standard" type="radio" name="accessText" value="standard" checked>
													<label class="switch-paddle" for="access-text-standard">
														<span class="show-for-sr">Standard text toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
										<br>
									</div>
									<div class="cell small-8 medium-auto">
										<p>Large text</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-text-large.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-text-large" type="radio" name="accessText" value="large">
													<label class="switch-paddle" for="access-text-large">
														<span class="show-for-sr">Large text toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
										<br>
									</div>
									<div class="cell small-8 medium-auto">
										<p>Extra large text</p>
										<div class="grid-x grid-margin-x align-middle">
											<div class="cell auto">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-text-xl.png" alt="">
											</div>
											<div class="cell auto">
												<div class="switch large">
													<input class="switch-input" id="access-text-xl" type="radio" name="accessText" value="xl">
													<label class="switch-paddle" for="access-text-xl">
														<span class="show-for-sr">Extra large text toggle</span>
														<span class="switch-active" aria-hidden="true">On</span>
														<span class="switch-inactive" aria-hidden="true">Off</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<br>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<button class="close-button" data-close aria-label="Close modal" type="button">
				<small>Finish & Save</small> <span aria-hidden="true">&times;</span>
			</button>
		</div>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
