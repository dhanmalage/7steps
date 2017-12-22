<?php get_header();?>

	<div class="container">
		<div id="smartwizard">

			<div>
				<div id="step-1" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/1step.jpg" rel="step-1" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Help us learn more about your business</h2>

								<div class="form-group">
									<label for="business-name">What's the name of your business?</label>
									<input type="text" name="business-name" class="form-control" id="business-name">
								</div>

								<div class="form-group">
									<label for="industry">What industry are you in?</label>
									<p class="instructions">Please select one and select "other" with a comment if your industry isn't listed.</p>
									<div class="industry-buttons">
										<span>Accommodation & Hospitality</span>
										<span>Accounting</span>
										<span>Administrative Services</span>
										<span>Advertising</span>
										<span>Agriculture</span>
									</div>
								</div>

								<div class="form-group">
									<label for="industry-comment">If you select "other" above, please tell us briefly what you do?</label>
									<textarea name="industry-comment" rows="3" class="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="num-employees"># of employees</label>
									<div class="radio">
										<label><input type="radio" name="num-employees0"> 0-10</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="num-employees10"> 10-50</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="num-employees50"> 50-250</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="num-employees250"> 250+</label>
									</div>
								</div>

								<div class="form-group">
									<label for="num-years">How many years have you been in business</label>
									<input type="text" name="num-years" class="form-control">
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-2" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/2step.jpg" rel="step-2" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Do you have a website / Social media presence?</h2>

								<div class="form-group">
									<label for="business-name">What's your current domain name?</label>
									<p class="instructions">If you don't have one, we'll set one up for you!</p>
									<input type="text" name="business-name" class="form-control">
								</div>

								<div class="form-group">
									<label for="industry">If you don't have a domain name, what would you prefer?</label>
									<input type="text" name="business-name" class="form-control">
								</div>

								<div class="form-group social-links">
									<label for="industry-comment">Help us find you on social media so we can learn more about your business. Enter your social handles or links.</label>
									<input type="text" name="business-name" class="form-control" placeholder="Facebook">
									<input type="text" name="business-name" class="form-control" placeholder="Twitter">
									<input type="text" name="business-name" class="form-control" placeholder="Instagram">
									<input type="text" name="business-name" class="form-control" placeholder="Youtube">
									<input type="text" name="business-name" class="form-control" placeholder="Vimeo">
									<input type="text" name="business-name" class="form-control" placeholder="Pinterest">
								</div>


							</div>
						</div>
					</div>
				</div>

				<div id="step-3" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/3step.jpg" rel="step-3" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>In hac habitasse platea dictumst.</h2>

								<div class="form-group">
									<label for="business-name">Upload some photos of your business!</label>
									<p class="instructions">Including: <br>
										Owner photos, Products, Storefront/Signage, Logo, Staff, Happy Customers, Services, Company History, Anything else you want people to see!</p>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-4" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/4step.jpg" rel="step-4" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Now lets really dive in...</h2>

								<div class="form-group">
									<label for="industry-comment">Do you have a mission statement?</label>
									<p class="instructions">If you don't have one, we'll make one for you but tell us what your goals are and what vision you have for the company 5 years from now...</p>
									<textarea name="industry-comment" rows="3" class="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="industry-comment">Tell us about your products/services.</label>
									<p class="instructions">Describe in a few sentences what's unique about your product or services, what makes you different?</p>
									<textarea name="industry-comment" rows="3" class="industry-comment"></textarea>
								</div>

								<div class="form-group">
									<label for="industry-comment">Tell us about your team.</label>
									<p class="instructions">Tell us about your staff and culture, it's important for your customers to understand who is working for them. If you are a one or two-person operation, please note that below.</p>
									<textarea name="industry-comment" rows="3" class="industry-comment"></textarea>
								</div>



							</div>
						</div>
					</div>
				</div>

				<div id="step-5" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/5step.jpg" rel="step-5" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>We want to know about your competitors, so we know who to beat!</h2>

								<div class="form-group">
									<label for="industry-comment">Please list the top 5 competitors in your area below</label>
									<p class="sub-label">Competitor #1 and their website</p>
									<input type="text" name="business-name" class="form-control" id="business-name">
									<p class="sub-label">Competitor #2 and their website</p>
									<input type="text" name="business-name" class="form-control" id="business-name">
									<p class="sub-label">Competitor #3 and their website</p>
									<input type="text" name="business-name" class="form-control" id="business-name">
									<p class="sub-label">Competitor #4 and their website</p>
									<input type="text" name="business-name" class="form-control" id="business-name">
									<p class="sub-label">Competitor #5 and their website</p>
									<input type="text" name="business-name" class="form-control" id="business-name">
								</div>

							</div>
						</div>
					</div>
				</div>

				<div id="step-6" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/6step.jpg" rel="step-6" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>Please provide your contact information</h2>

								<div class="form-group">
									<label for="industry-comment">Address</label>
									<p class="sub-label">Address Line 1</p>
									<input type="text" name="business-name" class="form-control">
									<p class="sub-label">Address Line 2</p>
									<input type="text" name="business-name" class="form-control">

									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
										<p class="sub-label">City</p>
										<input type="text" name="business-name" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
										<p class="sub-label">State/Province</p>
										<input type="text" name="business-name" class="form-control">
									</div>

									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left">
										<p class="sub-label">Country</p>
										<input type="text" name="business-name" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
										<p class="sub-label">ZIP/Postal Code</p>
										<input type="text" name="business-name" class="form-control">
									</div>

									<label class="phone">Phone</label>
									<input type="text" name="business-name" class="form-control">

								</div>




							</div>
						</div>
					</div>
				</div>

				<div id="step-7" class="">
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-image-wrap">
								<img src="<?php echo get_template_directory_uri() ?>/images/7step.jpg" rel="step-7" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="step-content-wrap">

								<h2>All set! we have everything we need to know!</h2>

								<div class="form-group">
									<label for="industry-comment">We will have a representative reach out to you to get any additional information that we need</label>
								</div>

								<div class="step7-sub-title">
									<h3>Your site will be ready in 5 business days!</h3>
								</div>

								<div class="form-group">
									<label for="industry-comment">Smartsite monthly plan</label>
								</div>

								<div class="checkbox step7-check">
									<label><input type="checkbox" value=""><span>Smartsite & Maintenance <br><small>Prices renew monthly</small></span></label>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>

			<ul>
				<li><a href="#step-1">Step 1</a></li>
				<li><a href="#step-2">Step 2</a></li>
				<li><a href="#step-3">Step 3</a></li>
				<li><a href="#step-4">Step 4</a></li>
				<li><a href="#step-5">Step 5</a></li>
				<li><a href="#step-6">Step 6</a></li>
				<li><a href="#step-7">Step 7</a></li>
			</ul>

		</div>
	</div>

<?php get_footer();?>