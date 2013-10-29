<?php
	include("public/includes/header.inc");
?>
				<!--Main Content and Sidebar -->
				<div class="row">
					
					<!-- Contact -->
					<div class="large-9 columns">
						<h3>Get in Touch!</h3>
						<p>We'd love to hear from you. You can either send us an email or give us a call!</p>
						<p>Also, be sure to check us out on <a href="http://www.facebook.com/pages/CLIP-at-the-College-of-Staten-Island/256704091014261">
		      				<img src="public/images/images/fc-webicon-facebook-m.png" alt="Check us out on Facebook"/></a>
		      			</p>
		      	
		      					
		      					<form action="email.php" method="post">
		      						<fieldset>
			      					<legend>Contact CLIP</legend>
				      					<div class="row">
				            				<div class="large-2 columns">
				                				<label>Your Name</label>
				                				</div>
				                				<div class="large-10 columns">
				            					<input type="text" id="name" name="name" placeholder="John Smith" />
				            				</div>
				          				
				          				</div>
				          				<div class="row">
				            				<div class="large-2 columns">
				            					<label class="inline">Your Email</label>
				            				</div>
				            				<div class="large-10 columns">
				            					<input type="text" id="email" name="email" placeholder="jane@smithco.com" />
				            				</div>
				            			</div>
										<input type="hidden" id="zip" name="zip" />
										<label class="inline">What's up?</label>
										<textarea rows="4" name="content"></textarea><br /><rb />
										<button type="submit" class="radius button">Submit</button>
				          			</form>
				        		</div>
				    		</fieldset>
					
						<!-- End Contact -->
				    	
				    	<!-- Start Sidebar -->
						<div class="large-3 columns">
							<h5>Map</h5>
				    		<p>
				    			<a target="_blank" href="https://maps.google.com/maps?hl=en&q=college+of+staten+island&safe=off&ie=UTF-8&ei=aozHUOqSBsmS0QHg04GgBA&sqi=2&ved=0CAUQ_AUoAA" data-reveal-id="mapModal"><img src="public/images/map.gif" />
				    				<br />View Map
				    			</a>
				    		</p>		
				    		<p>
				    			College of Staten Island<br />
				    			2800 Victory Boulevard<br />
				    			Building 4N, Room 207<br />
				    			Staten Island, NY 10314<br />
				    			<strong>Director: Elizabeth Schade</strong>
				    			<br />
				    			Tel: 718.982.3069 or 718.982.2981<br />      
							</p>
				</div>
						<!-- End Sidebar -->
						
				  	</div>
				  	
				  	<!--End Main Content and Sidebar -->
			
			 <?php
				include("public/includes/footer.inc");
			?>