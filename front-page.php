<?php get_header();?>

	<div class="container">

		<div class="steps-home">
			<div class="container">
				<div class="row-fluid">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="step-image-wrap">
							<img src="<?php echo get_template_directory_uri() ?>/images/home.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="step-content-wrap">

							<h2>Get a website in 7 days</h2>

							<p class="home-content">In 7 easy steps, we'll ask you everything we need to know to build you an outstanding Smart-Site, that looks beautiful and works hard for your business.
								Just answer these simple but important questions and in 7 days we'll have your new site launched!</p>

							<div class="form-group">
								<label for="home-email">Email address</label>
								<input type="email" name="home-email" class="form-control" id="homeEmail">
							</div>

							<a class="btn btn-start" id="btnStart" href="javascript:void(0);">Let's start</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="smartwizard">
			<div>
				<div id="step-1" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/1step.jpg" alt="step-1" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Help us learn more about your business</h2>

								<div class="form-group">
									<label for="business-name">What's the name of your business?</label>
									<input type="text" name="businessName" class="form-control" id="business-name">
								</div>

								<div class="form-group">
									<label for="industry">What industry are you in?</label>
									<p class="instructions">Please select one and select "other" with a comment if your industry isn't listed.</p>
									<div class="industry-buttons">
										<span>Accommodation &amp; Hospitality</span>
										<span>Accounting</span>
										<span>Administrative Services</span>
										<span>Advertising</span>
										<span>Agriculture</span>
										<span>Architecture</span>
										<span>Automotive</span>
										<span>Construction</span>
										<span>Consulting</span>
										<span>Design</span>
										<span>Education</span>
										<span>Engineering</span>
										<span>Film</span>
										<span>Finance</span>
										<span>Fishing &amp; Hunting</span>
										<span>Forestry</span>
										<span>Food Services</span>
										<span>Government</span>
										<span>Healthcare</span>
										<span>Insurance</span>
										<span>I'm an individual</span>
										<span>Information Technology</span>
										<span>Internet</span>
										<span>Legal</span>
										<span>Manufacturing</span>
										<span>Marketing</span>
										<span>Mining</span>
										<span>Non-Profit</span>
										<span>Public Relations</span>
										<span>Real Estate</span>
										<span>Recreation</span>
										<span>Retail</span>
										<span>Scientific Services</span>
										<span>Social Assistance</span>
										<span>Software</span>
										<span>Support Services</span>
										<span>Technical Services</span>
										<span>Telecommunications</span>
										<span>Transportations</span>
										<span>Other</span>
									</div>
								</div>

								<div class="form-group">
									<label for="industry-comment">If you select "other" above, please tell us briefly what you do?</label>
									<textarea name="industry-comment" rows="3" class="industry-comment" id="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="num-employees"># of employees</label>
									<div class="radio">
										<label for="num-employees"><input type="radio" name="num-employees" class="num-employees" value="0"> 0-10</label>
									</div>
									<div class="radio">
										<label for="num-employees"><input type="radio" name="num-employees" class="num-employees" value="10"> 10-50</label>
									</div>
									<div class="radio">
										<label for="num-employees"><input type="radio" name="num-employees" class="num-employees" value="50"> 50-250</label>
									</div>
									<div class="radio">
										<label for="num-employees"><input type="radio" name="num-employees" class="num-employees" value="250"> 250+</label>
									</div>
								</div>

								<div class="form-group">
									<label for="num-years">How many years have you been in business</label>
									<input type="text" name="num-years" class="form-control" id="num-years">
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-2" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/2step.jpg" alt="step-2" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Do you have a website / Social media presence?</h2>

								<div class="form-group">
									<label for="domain">What's your current domain name?</label>
									<p class="instructions">If you don't have one, we'll set one up for you!</p>
									<input type="text" name="domain" id="domain" class="form-control">
								</div>

								<div class="form-group">
									<label for="prefer-domain">If you don't have a domain name, what would you prefer?</label>
									<input type="text" name="prefer-domain" id="prefer-domain" class="form-control">
								</div>

								<div class="form-group social-links">
									<label for="social-links">Help us find you on social media so we can learn more about your business. Enter your social handles or links.</label>
									<input type="text" name="test" id="socialFb" class="form-control social-fb" placeholder="Facebook">
									<input type="text" name="test" id="socialTw" class="form-control social-tw" placeholder="Twitter">
									<input type="text" name="test" id="socialIn" class="form-control social-in" placeholder="Instagram">
									<input type="text" name="test" id="socialYo" class="form-control social-yo" placeholder="Youtube">
									<input type="text" name="test" id="socialVi" class="form-control social-vi" placeholder="Vimeo">
									<input type="text" name="test" id="socialPi" class="form-control social-pi" placeholder="Pinterest">
								</div>


							</div>
						</div>
					</div>
				</div>

				<div id="step-3" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/3step.jpg" alt="step-3" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Show us what you're all about!</h2>

								<div class="form-group">
									<label for="test">Upload some photos of your business!</label>
									<p class="instructions">Including: <br>
										Owner photos, Products, Storefront/Signage, Logo, Staff, Happy Customers, Services, Company History, Anything else you want people to see!</p>
								</div>

								<div class="file-upload-wrap" id="dropzone">
									<img src="<?php echo get_template_directory_uri(); ?>/images/file-upload.png" alt="file-upload">
									<p>Drag and drop files to upload</p>

									<div class="hide upload-url"><?php echo get_template_directory_uri(); ?></div>
									<!-- The fileinput-button span is used to style the file input field as button -->
									<span class="file-browse fileinput-button">
										<span>Browse</span>
										<!-- The file input field used as target for the file upload widget -->
										<input id="fileupload" type="file" name="files[]" multiple>
									</span>

								</div>

								<!-- The container for the uploaded files -->
								<div class="file-upload-list">
									<div id="files" class="files"></div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-4" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/4step.jpg" alt="step-4" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Now lets really dive in...</h2>

								<div class="form-group">
									<label for="mission">Do you have a mission statement?</label>
									<p class="instructions">If you don't have one, we'll make one for you but tell us what your goals are and what vision you have for the company 5 years from now...</p>
									<textarea name="mission" id="mission" rows="3" class="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="products">Tell us about your products/services.</label>
									<p class="instructions">Describe in a few sentences what's unique about your product or services, what makes you different?</p>
									<textarea name="products" id="products" rows="3" class="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="team">Tell us about your team.</label>
									<p class="instructions">Tell us about your staff and culture, it's important for your customers to understand who is working for them. If you are a one or two-person operation, please note that below.</p>
									<textarea name="team" id="team" rows="3" class="industry-comment"></textarea>
								</div>



							</div>
						</div>
					</div>
				</div>

				<div id="step-5" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/5step.jpg" alt="step-5" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>We want to know about your competitors, so we know who to beat!</h2>

								<div class="form-group">
									<label for="competitors">Please list the top 5 competitors in your area below</label>
									<p class="sub-label">Competitor #1 and their website</p>
									<input type="text" name="competitor1" class="form-control" id="test">
									<p class="sub-label">Competitor #2 and their website</p>
									<input type="text" name="competitor2" class="form-control" id="test">
									<p class="sub-label">Competitor #3 and their website</p>
									<input type="text" name="competitor3" class="form-control" id="test">
									<p class="sub-label">Competitor #4 and their website</p>
									<input type="text" name="competitor4" class="form-control" id="test">
									<p class="sub-label">Competitor #5 and their website</p>
									<input type="text" name="competitor5" class="form-control" id="test">
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-6" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/6step.jpg" alt="step-6" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Please provide your contact information</h2>

								<div class="form-group">
									<label for="address1">Address</label>
									<p class="sub-label address1">Address Line 1</p>
									<input type="text" name="address1" id="address1" class="form-control">
									<p class="sub-label">Address Line 2</p>
									<input type="text" name="address2" id="address2" class="form-control">

									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
										<p class="sub-label city">City</p>
										<input type="text" name="city" id="city" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
										<p class="sub-label state">State/Province</p>
										<input type="text" name="state" id="state" class="form-control">
									</div>

									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
										<p class="sub-label country">Country</p>
										<input type="text" name="country" id="country" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
										<p class="sub-label">ZIP/Postal Code</p>
										<input type="text" name="zip" id="zip" class="form-control">
									</div>

									<label for="phone" class="phone">Phone</label>
									<input type="text" name="phone" id="phone" class="form-control">

								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="step-7" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/7step.jpg" alt="step-7" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>All set! we have everything we need to know!</h2>

								<div class="form-group">
									<label for="common">We will have a representative reach out to you to get any additional information that we need</label>
								</div>

								<div class="step7-sub-title">
									<h3>Your site will be ready in 5 business days!</h3>
								</div>

								<div class="form-group">
									<label for="common">Smartsite monthly plan</label>
								</div>

								<div class="checkbox step7-check">
									<label>
										<input type="checkbox" value="">
										<span>Smartsite & Maintenance <br><small>Prices renew monthly</small></span>
									</label>
								</div>

								<div class="checkbox step7-check">
									<label>
										<input type="checkbox" value="" id="terms-services">
										<span>$79/month <br><small>I agree to the terms of service</small></span>
									</label>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>

			<ul>
				<li id="step0"><a href="#step-1">Step 1</a></li>
				<li id="step1"><a href="#step-2">Step 2</a></li>
				<li id="step2"><a href="#step-3">Step 3</a></li>
				<li id="step3"><a href="#step-4">Step 4</a></li>
				<li id="step4"><a href="#step-5">Step 5</a></li>
				<li id="step5"><a href="#step-6">Step 6</a></li>
				<li id="step6"><a href="#step-7">Step 7</a></li>
			</ul>

		</div>
	</div>

	<div id="dataModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Terms of service</h4>
				</div>
				<div class="modal-body terms-services-content">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();?>