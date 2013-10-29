<?php
	include("public/includes/header.inc");
?>
		<!-- Content -->
	       				
		<!-- First Band (Slider) -->
		<div class="row">
				<div class="large-12 columns">
					<div id="featured" data-orbit>
					<div class="push-1 columns">
						<img src="public/images/clip3.jpg" width="1200" alt="slide image" />
						<!-- <img src="public/images/clip1.jpg" width="1200" alt="slide image" />
						<img src="public/images/clip2.jpg" width="1200" alt="slide image" />-->
					</div>
					</div>
					</div>
					<hr />
		<!-- End Slider -->
				
		<!-- Main Content -->
		<div class="row">
			<div class="large-8 columns">
				<div class="radius">
					<div class="large-6 columns">
						<h4>Mission Statement</h4>
						<hr />
						<h5 class="subheader">
								The mission of the CUNY Language Immersion Program at the College of Staten Island, which is part of the Department of Continuing Education and Professional Development, is to prepare ESL students for success in college.
							</h5>
					</div>
					<div class="large-6 small-2 columns">
						<p>
							CLIP employs a content-based approach to teach academic English, with students learning the language by studying a broad range of topics and themes typically covered in college classes. The development of important academic skills is emphasized including writing, reading, grammar, listening, note-taking and public speaking.
							<a href="<?php echo $URL; ?>/clip/mission.php">Continue Reading</a>
						</p>
					</div>
				</div>
			</div>

			<div class="large-4 columns">
				<h4>Get In Touch!</h4>
				<hr />
				<a href="<?php echo $URL; ?>/clip/contact.php">
					<div class="radius callout button">
						<strong class="text-center">Contact Page!</strong>
					</div>
				</a>
				<a href="mailto:clip@csi.cuny.edu">
					<div class="radius callout button">
						<strong class="text-center">Send Us an Email!</strong>
					</div>
				</a>
			</div>
		</div>
      	<!-- End Main Content -->
      					</div>
			</div>
      	<?php
	include("public/includes/footer.inc");
?>