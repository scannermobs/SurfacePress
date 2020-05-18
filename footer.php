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
							<p class="source-org copyright"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Made by <a href="surfaceimpression.digital">Surface Impression</a>.</small></p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<div class="reveal small" id="modal-accessibility" data-reveal>
			<br>
			<br>
	  	<div class="grid-container">

	      <div class="grid-x grid-margin-x grid-padding-x">

	        <div class="cell medium-3 large-4">
            <img class="access-image" src="/wp-content/themes/outsidein/assets/images/oi-main-logo-multi.png" alt="">
            <p>These options can change the way this website looks, which may help you to use it more easily.</p>
	        </div>

	        <div class="cell auto">
            <h1 class="main-title">Accessibility options</h1>
            <ul class="tabs" data-tabs id="access-tabs">
                <li class="tabs-title is-active"><a href="#contrast" aria-selected="true"><i class="fas fa-adjust"></i> Display contrast</a></li>
                <li class="tabs-title"><a href="#text"><i class="fas fa-text-height"></i> Text options</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="access-tabs">
              <!-- Panel 1 -->
              <div class="tabs-panel is-active" id="contrast">
                <div class="grid-x grid-margin-x">
                  <div class="cell auto">
                    <h4>Standard contrast</h4>
                    <img src="/wp-content/themes/outsidein/assets/images/access-standard.png" alt="">
                    <div class="switch large">
                      <input class="switch-input" id="access-contrast-standard" type="radio" name="accessContrast" value="standard" checked>
                      <label class="switch-paddle" for="access-contrast-standard">
                        <span class="show-for-sr">Contrast toggle</span>
                        <span class="switch-active" aria-hidden="true">On</span>
                        <span class="switch-inactive" aria-hidden="true">Off</span>
                      </label>
                    </div>
                  </div>
                  <div class="cell auto">
                    <h4>Low contrast</h4>
                    <img src="/wp-content/themes/outsidein/assets/images/access-contrast-low.png" alt="">
                    <div class="switch large">
                      <input class="switch-input" id="access-contrast-low" type="radio" name="accessContrast" value="low">
                      <label class="switch-paddle" for="access-contrast-low">
                        <span class="show-for-sr">Contrast toggle</span>
                        <span class="switch-active" aria-hidden="true">On</span>
                        <span class="switch-inactive" aria-hidden="true">Off</span>
                      </label>
                    </div>
                  </div>
                  <div class="cell auto">
                    <h4>High contrast</h4>
                    <img src="/wp-content/themes/outsidein/assets/images/access-contrast-high.png" alt="">
                    <div class="switch large">
                      <input class="switch-input" id="access-contrast-high" type="radio" name="accessContrast" value="high">
                      <label class="switch-paddle" for="access-contrast-high">
                        <span class="show-for-sr">Contrast toggle</span>
                        <span class="switch-active" aria-hidden="true">On</span>
                        <span class="switch-inactive" aria-hidden="true">Off</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

											<!-- Panel 2 -->
							<div class="tabs-panel" id="text">
								<div class="grid-x grid-margin-x">
									<div class="cell auto">
										<h4>Standard text</h4>
											<img src="/wp-content/themes/outsidein/assets/images/access-standard.png" alt="">
											<div class="switch large">
												<input class="switch-input" id="access-text-standard" type="radio" name="accessText" value="standard" checked>
												<label class="switch-paddle" for="access-text-standard">
													<span class="show-for-sr">Contrast toggle</span>
													<span class="switch-active" aria-hidden="true">On</span>
													<span class="switch-inactive" aria-hidden="true">Off</span>
												</label>
											</div>
									</div>
									<div class="cell auto">
										<h4>Large text</h4>
										<img src="/wp-content/themes/outsidein/assets/images/access-text-large.png" alt="">
										<div class="switch large">
											<input class="switch-input" id="access-text-large" type="radio" name="accessText" value="large">
											<label class="switch-paddle" for="access-text-large">
												<span class="show-for-sr">Contrast toggle</span>
												<span class="switch-active" aria-hidden="true">On</span>
												<span class="switch-inactive" aria-hidden="true">Off</span>
											</label>
										</div>
									</div>
									<div class="cell auto">
										<h4>Extra large text</h4>
										<img src="/wp-content/themes/outsidein/assets/images/access-text-xl.png" alt="">
										<div class="switch large">
											<input class="switch-input" id="access-text-xl" type="radio" name="accessText" value="xl">
											<label class="switch-paddle" for="access-text-xl">
												<span class="show-for-sr">Contrast toggle</span>
												<span class="switch-active" aria-hidden="true">On</span>
												<span class="switch-inactive" aria-hidden="true">Off</span>
											</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
				<small>Finish & Save</small> <span aria-hidden="true">&times;</span>
			</button>
		</div>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
