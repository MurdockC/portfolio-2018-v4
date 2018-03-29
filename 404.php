<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";


	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once('assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$application = source::getApplication();
	$company = source::getTitle();
?>

<!DOCTYPE html>



			<head>
				<link rel="stylesheet" type-="text/css" href="/assets/css/normalize.css">
			  <link rel="stylesheet" href="/assets/css/main.css"/>
			</head>
			<body class="full-height flex flex-column">
		    <section id="404-error" class="container-full-width light-bg centered-contents flex flex-grow ">
	        <div class="container-960 flex wrap">
            <div class="flex margin-lg flex-column-sm">
							<div class="margin-lg centered-contents flex">
							<img src="assets/images/logo.png">
						</div>
              <h1 class="margin-sm">Whoops! Looks like something went wrong.</h1>
 			        <h3 class-"margin-sm">Good news though, you can still apply!</h3>
							<div class="margin-lg centered-contents flex">
 			        <button class="button button-primary flex-grow padding-lg padding-tb-sm " href="<?php echo $application; ?>">Apply Now!</button>
							</div>
						</div>
	        </div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
	</body>
</html>
