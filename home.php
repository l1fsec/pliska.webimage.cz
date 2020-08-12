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
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--Favicons-->
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="assets/favicons/site.webmanifest">
		<link rel="mask-icon" href="aseets/favicons/safari-pinned-tab.svg" color="#a65bd5">
		<meta name="msapplication-TileColor" content="#9f00a7">
		<meta name="theme-color" content="#440d43">
	</head>
	<body class="subpage">
		<a class="weatherwidget-io" href="https://forecast7.com/cs/50d6614d05/usti-nad-labem/" data-label_1="Ústí nad Labem" data-label_2="Centrum" data-font="Open Sans" data-icons="Climacons Animated" data-theme="original" data-basecolor="#8a0575" data-accent="rgba(181, 14, 14, 0.02)" >Ústí nad Labem Centrum</a>
		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"><a href="index.html">Jan Pliska <span>| Domov </span></a></div>
			<a href="#menu"><span>Menu</span></a>
		</header>
		<nav id="menu">
			<ul class="links">
				<li><a href="profile.php" class="icon round fa-user">Profil</a></li>
				<li><a href="logout.php" class="icon fa-sign-out">Odhlásit se</a></li>
			</ul>
		</nav>
		<!--Content-->
		<section id="post" class="wrapper bg-img" data-bg="banner6.jpg">
			<div class="inner">
				<article class="box">
					<header>
						<h2><?php echo 'Vítej ' . $_SESSION['name'] . '!'; ?></h2>
					</header>
					<div class="content">
						<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="134700/"></script> <!-- end feedwind code -->
						
					</div>
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
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</body>
</html>