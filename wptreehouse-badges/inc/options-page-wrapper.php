<h2><?php esc_attr_e( 'Official treehouse plugin' ); ?></h2>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Heading', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						<h2 class="hndle"><span><?php esc_attr_e( 'Lets Get Started' ); ?></span>
						</h2>

						<div class="inside">
							
						<form name='wptreehouse_username_form' action="#" method="post">

						<input type="hidden" name="wptreehouse_form_submitted" value="Y">
							
						<table class="form-table">
							<tr>
								<td class="row-title">
									<label for='wptreehouse_username'>Treehouse username</label>
								</td>
								<td>
								<input type="text" name='wptreehouse_username' id='wptreehouse_username' value='' class="regular-text" /><br>
								</td>
							</tr>							
						</table>
						<p><input class="button-primary" type="submit" name="save" value='save' />
						
						</p>

						</form>
							</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->

						

						<div class="inside">
							<p>Here are you 20 most recent badges</p>
							<ul class="wptreehouse-badges">

										<?php for( $i = 0; $i < 20; $i++ ): ?>
										<li>
											<ul>
												<li>
													<img class="wptreehouse-gravatar" width="120px" src="<?php echo $plugin_url .'/images/wp-badge.png'; ?>">								
												</li>										
												<li class="wptreehouse-badge-name">
													<a href="#">Badge Name</a>
												</li>
												<li class="wptreehouse-project-name">
													<a href="#">Project Name</a>
												</li>
											</ul>									
										</li>								
										<?php endfor; ?>

							</ul>
							</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

												<h3><span>Mike the Frog's Profile</span></h3>
						<div class="inside">
							
							<p><img width="100%" class="wptreehouse-gravatar" src="<?php echo $plugin_url . '/images/mike-the-frog.png'; ?>" alt="Mike the Frog Gravatar"></p>
							<ul class="wptreehouse-badges-and-points">							

								<li>Badges: <strong>200</strong></li>
								<li>Points: <strong>10000</strong></li>

						</ul>
						</div> <!-- .inside -->

						
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
