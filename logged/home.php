<?php
//Session
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
		exit;
}
?>
<!DOCTYPE HTML>
<!--Login-->
<html>
	<head>
		<title>Jan Pliska | Domov</title>
		<meta charset="utf-8" />
		<!--OpenGraph Metadata-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="Jan Pliska | Domov">
		<meta property="og:image" content="http://pliska.webimage.cz/images/banner2.png">
		<meta property="og:description" content="Vítejte, na mém webu!">
		<meta property="og:url" content="http://pliska.webimage.cz">
		<!--Style-->
		<link rel="stylesheet" href="../assety/css/main.css" />
		<!--Favicons-->
		<link rel="apple-touch-icon" sizes="180x180" href="../assety/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assety/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assety/favicons/favicon-16x16.png">
	<link rel="manifest" href="../assety/favicons/site.webmanifest">
	<link rel="mask-icon" href="../assety/favicons/safari-pinned-tab.svg" color="#2424ad">
	<meta name="msapplication-TileColor" content="#2424ad">
	<meta name="theme-color" content="#2424ad">
	</head>
	<body class="subpage">
		<a class="weatherwidget-io" href="https://forecast7.com/cs/50d6614d05/usti-nad-labem/" data-label_1="Ústí nad Labem" data-label_2="Centrum" data-font="Open Sans" data-icons="Climacons Animated" data-theme="original" data-basecolor="#8a0575" data-accent="rgba(181, 14, 14, 0.02)" >Ústí nad Labem Centrum</a>
		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"><a href="../index.html">Jan Pliska <span>| Domov </span></a></div>
			<a href="#menu"><span>Menu</span></a>
		</header>
		<nav id="menu">
			<ul class="links">
				<li><a href="articles/uvod.html" class="fas fa-question">Tajemnosti</a></li>
				<li><a href="profile.php" class="icon round fa-user">Profil</a></li>
				<li><a href="logout.php" class="icon fa-sign-out">Odhlásit se</a></li>
			</ul>
		</nav>
		<!--Content-->
	<section id="post" class="wrapper bg-img" data-bg="../../images/banner6.jpg">
			<div class="inner">
				<article class="box">
					<header>
						<h2><?php echo 'Vítej ' . $_SESSION['name'] . '!'; ?></h2>
					</header>
					<footer>
					</footer>
				</article>
			</div>
		</section>
		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<nav class="navtop">
				</div>
			</nav>
			<div class="inner">
				<div class="copyright">
					&copy; Jan Pliska 2020
				</div>
				<ul class="icons">
					<li><a href="https://github.com/l1fsec" class="icon round fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="https://www.facebook.com/HonzaFukbejs" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
				</ul>
			</div>
		</footer>
		<!-- Scripts -->
		<script src="../assety/js/jquery.min.js"></script>
		<script src="../assety/js/jquery.scrolly.min.js"></script>
		<script src="../assety/js/jquery.scrollex.min.js"></script>
		<script src="../assety/js/skel.min.js"></script>
		<script src="../assety/js/util.js"></script>
		<script src="../assety/js/main.js"></script>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</body>
</html>