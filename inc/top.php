<?php
/**
 * top.php
 *
 * Author: Adam Victor
 *
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle ?></title>
		<!-- [if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->
        <meta name="description" content="<?php echo $pageDescription ?>">
        <meta name="author" content="<?php echo $pageAuthor ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <meta name="google-site-verification" content="" />
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php echo $pageOGtitle; ?>">
        <meta property="og:site_name" content="<?php echo $pageOGsite_name; ?>">
        <meta property="og:description" content="<?php echo $pageOGdescription; ?>">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:url" content="">
        <meta name="geo.region" content="US-MI" />
        <meta name="geo.placename" content="" />
        <meta name="geo.position" content=";" />
        <meta name="ICBM" content=", " />
        <meta http-equiv="content-language" content="en-us">
        <link rel="alternate" href="" hreflang="x-default" />
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">    
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <?php if ($template['theme']) { ?>
        <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
        <?php } ?>
        <link rel="stylesheet" href="css/themes.css">
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>

    <!-- Body -->
    <!-- In the PHP version you can set the following options from the config file -->
    <!-- Add the class .hide-side-content to <body> to hide side content by default -->
    <?php
    $body_classes = '';

    if ($template['header'] == 'fixed-top') {
        $body_classes = 'header-fixed-top';
    } else if ($template['header'] == 'fixed-bottom') {
        $body_classes = 'header-fixed-bottom';
    }

    ?>
    <body<?php if ($body_classes) { echo ' class="' . $body_classes . '"'; } ?>>
        <!-- Page Container -->
        <div id="page-container"<?php if ($template['page'] == 'full-width') { echo ' class="full-width"'; } ?>>
            <!-- Header -->
            <header class="navbar">
				<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						 <div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav margin-left">
								<li role="naviagtion"><a href="#upcoming-events">Upcoming Events</a></li>
								<li role="naviagtion"><a href="#previous-events">Previous Events</a></li>
								<li role="naviagtion"><a href="#music" class="scroll">Music</a></li>
								<li role="naviagtion"><a href="#gallery" class="scroll">Gallery</a></li>
							</ul>
						</div>
					</div>
				</nav>
            </header>
            <!-- END Header -->
			
			
		
			
