<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Privacy";
	$pageName = "privacy";
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once('assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>
<head>

  	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>
<div class="containern container-full-width centered-contents flex flex-column  paddin-xl">
	<div class="container-full-width self-start self-centered margin-lg flex primary-bg  padding-lg centered-contents ">
		<div class="container-1200 self-centered">
			<img class="logo self-start" src="assets/images/logo.png" alt="Company Logo">
		</div>
</div>
	<div class="container-1200 self-start self-centered margin-xl flex">
		<div>
				<h1 style="margin-top: 0px;" class="margin-sm margin-tb-xl">Privacy Policy</h1>

			<p class="margin-sm margin-tb-lg">This privacy notice discloses the privacy practices for <?php echo $company; ?>. This privacy notice applies solely to information collected by this website. It will notify you of the following:</p>

			<ul class="margin-sm">
				<li>What personally identifiable information is collected from you through the website, how it is used and with whom it may be shared.</li>
				<li>What choices are available to you regarding the use of your data.</li>
				<li>The security procedures in place to protect the misuse of your information.</li>
				<li>How you can correct any inaccuracies in the information. </li>
			</ul>
      <br>
			<h2 class="margin-sm">Information Collection, Use, and Sharing</h2>
			<p class="margin-md">We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>

			<p class="margin-md">We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request.</p>

			<p class="margin-md">Unless you ask us not to, we may contact you via email or phone in the future to tell you about job opportunities, to ask further questions regarding your application, or report changes to this privacy policy.</p>

			<h2 class="margin-sm">Your Access to and Control Over Information</h2>
			<p class="margin-md">You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</p>

			<ul class="margin-sm">
				<li>See what data we have about you, if any.</li>
				<li>Change/correct any data we have about you.</li>
				<li>Have us delete any data we have about you.</li>
				<li>Express any concern you have about our use of your data.</li>
			</ul>
      <br>
			<h2 class="margin-sm">Security</h2>
			<p class="margin-md">We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p>

			<p class="margin-md">Wherever we collect sensitive information, that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>

			<p class="margin-md">While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, recruiters and their supervisors) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>

			<p class="margin-md">If you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at <?php echo $phone; ?> or via email.</p>

		</div>
	</div>
</div>

<?php include ('assets/includes/footer.php'); ?>
