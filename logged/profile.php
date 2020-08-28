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
$stmt = $con->prepare('SELECT psw FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($psw);
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
	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo"><a href="index.html">Jan Pliska <span>Profil</span></a></div>
		<a href="#menu"><span>Menu</span></a>
	</header>
	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="home.php" class="icon fa-chevron-left"> Zpět</a></li>
			<li><a href="logout.php" class="icon fa-sign-out"> Odhlásit se</a></li>
		</ul>
	</nav>
	<!-- Main -->
	<div id="main" class="container">
		<h2><?php echo 'Ahoj ' . $_SESSION['name'] . '!'; ?></h2>
		<blockquote>Zde se můžeš podívat na svoje přihlašovací údaje.</blockquote>
		<table>
			<td>Jméno:</td>
			<td><?= $_SESSION['name'] ?></td>
			</tr>
			<tr>
				<td>Heslo:</td>
				<td><?= $psw ?></td>
			</tr>
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
	<script src="../assety/js/jquery.min.js"></script>
	<script src="../assety/js/jquery.scrolly.min.js"></script>
	<script src="../assety/js/jquery.scrollex.min.js"></script>
	<script src="../assety/js/skel.min.js"></script>
	<script src="../assety/js/util.js"></script>
	<script src="../assety/js/main.js"></script>
</body>

</html>