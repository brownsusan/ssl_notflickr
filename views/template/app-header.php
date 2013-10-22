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
			
			<a id="logo" href="<?php echo $GLOBALS['web_root']; ?>?action=photos">Not Flickr</a>
			<a href="<?php echo $GLOBALS['web_root']; ?>?action=action_logout">log out</a>
			<a href="<?php echo $GLOBALS['web_root']; ?>?action=photo_upload">Upload Photo</a>
			<!-- <span><?php echo($_SESSION["user"]["username"])?></span> -->
		</header>