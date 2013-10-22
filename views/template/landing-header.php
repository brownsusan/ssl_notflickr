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
		<link rel="stylesheet" href="/css/main.css">
	</head>
	<body>
		
		<div id="header_placeholder"></div>
		
		<header>
<!-- 			TODO CHANGE THE HREF TO REPRESENT THE CONTROLLER THAT HANDLES THE UPLOAD/HOME PAGE -->
			<a id="logo" href="<?php echo $GLOBALS['web_root']; ?>?action=notes">Not Flicker</a>
			
<!-- 			TODO CHANGE THE HREF TO REPRESENT THE CONTROLLER THAT HANDLES THE LOGGING IN -->
		<form action="<?php echo $GLOBALS['web_root']; ?>?action=action_user_login" method="post" class="home-login" name="home-login">
			<input name="email" id="loginEmail" placeholder="Username"/>
			<input name="password" type="password" id="loginPass" placeholder="Password"/>
			<input type="submit" value="log in" />
		</form>
		</header>
