<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Jan Pliska | Profil</title>
		<meta charset="utf-8" />
		<!--OpenGraph Metadata-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="Jan Pliska | Profil">
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
		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"><a href="index.html">Jan Pliska <span>Profil</span></a></div>
			<a href="#menu"><span>Menu</span></a>
		</header>
		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				<li><a href="home.php" class="icon  fa-chevron-left">Zpět</a></li>
				<li><a href="logout.php" class="icon fa-sign-out">Odhlásit se</a></li>
			</ul>
		</nav>
		<!-- Main -->
		<div id="main" class="container">
			<h2><?php echo 'Ahoj ' . $_SESSION['name'] . '!'; ?></h2>
			<blockquote>Zde se můžeš podívat na svoje přihlašovací údaje.</blockquote>
			<table>
					<td>Jméno:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Heslo:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
				</table>
		
		<!--Footer-->
		<footer id="footer">
			<div class="inner">
				<div class="copyright">
					&copy; <b>Jan Pliska 2020</b>
				</div>
			</div>
		</div>
	</footer>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>