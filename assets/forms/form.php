<div class="container full-width text-center">
	<h2 class="margin-sm form-title">Be Contacted</h2>
</div>
<div class="container width-1200 flex wrap">
		<div class="flex margin-lg flex-column-sm">
				<label class="form-label" for="firstname">First & Last Name</label>
				<input tabindex="3"  type="text" name="name" autocorrect="off" autocapitalize="sentences" title="Please enter your first & last name." placeholder="Enter your First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required> <!--pattern="^\w+\s+\w+(\s+\w+)*\s?$"-->
				<label class="form-label" for="content">Email</label>
				<input tabindex="4" type="email" name="content" autocapitalize="off" autocorrect="off"  title="Please enter a valid email address." placeholder="Enter your Email Address" pattern="^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
				<input class="email-honeypot" type="email" name="email" title="Please enter a valid email." placeholder="Email">


				<label class="form-label" for="phone">Phone</label>
				<input tabindex="5" class="u-full-width" type="tel" name="phone" title="Please enter a 9 digit phone number." placeholder="Enter your Phone Number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
				<!--<div>
					<label for="address">Street Address</label>
					<input tabindex="6"  type="text" name="address" title="Please enter your street address." placeholder="Enter your Street Address" required>
				</div>-->
				<!--[if lte IE 9]>
					<label for="city">City</label>
					<input tabindex="7" type="text" name="city" title="Please enter your city." placeholder="City">
					<label for="state">State</label>
					<input tabindex="8" type="text" name="state" title="Please enter your state." placeholder="State/Province">
				<![endif]-->
				<!--[if !IE]>-->
				<input tabindex="7" type="hidden" name="city" title="Please enter your city." placeholder="City">
				<input tabindex="8" type="hidden" name="state" title="Please enter your state." placeholder="State/Province">

				<label class="form-label" for="zip">Zip Code</label>
				<input tabindex="9" type="tel" name="zipcode" title="Please enter your zip code." placeholder="Enter your Zip Code" pattern="^\d{5}" required>
				<div class="text-error"></div>
		</div>
		<div class="flex margin-lg flex-column-sm">
				<label class="form-label" for="experience">Years of Experience</label>
				<div class="check-radio-container">
					<input type="radio" id="experience1-2" name="experience" value="1-2 years" required><label for="experience1-2">1-2 Years</label>
					<input type="radio" id="experience3-5" name="experience" value="3-5 years"><label for="experience3-5">3-5 Years</label>
					<input type="radio" id="experience6-10" name="experience" value="6-10 years"><label for="experience6-10">6-10 Years</label>
					<input type="radio" id="experience10+" name="experience" value="10+ years"><label for="experience10+">10+ Years</label>
				</div>
				<label class="form-label" for="experience">Current CDL</label>
				<div class="check-radio-container">
					<input type="radio" id="cdlyes" name="cdl" value="yes" required><label  for="cdlyes">Yes</label>
					<input type="radio" id="cdlno" name="cdl" value="no"><label for="cdlno">No</label>
				</div>
				<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
					<input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
					<input type="hidden" name="recruiterphone" value="<?php echo $phone; ?>">
					<input type="hidden" name="location" value="<?php echo $city; ?>,<?php echo $state; ?>">
					<input type="hidden" name="division" value="<?php echo $pageTitle;?>">
					<input type="hidden" name="jobid" value="<?php echo $jobID; ?>">
				<button class="button-primary padding-md full-width margin-lg self-centered">Contact Me!</button>
		</div>
</div>
