<?php

//dynamic content code
?>

<html>
	<head>
		<title>Not Flickr</title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />

		<?php
		// we must load the css from the root (/) because
		//relative paths don't work with pretty urls and a shared header file'
		?>
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		
		<div id="header_placeholder"></div>
		
		<header>
			<a id="logo" href="<?php echo $GLOBALS['web_root']; ?>">Not Flickr</a>
			<div class="app-header">
				<!-- <span><?php echo($_SESSION["user"]["username"])?></span> -->
				<a href="<?php echo $GLOBALS['web_root']; ?>?action=action_user_logout">log out</a>
			</div>
		</header>