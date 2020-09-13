<?php
session_start();

//Připojení databáze
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

// Vyzkoušej připojení
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Připojení se nezdařilo na: ' . mysqli_connect_error());
}
//Kontrola dat
if ( !isset($_POST['name'], $_POST['psw']) ) {

	// Data nepřístupná
	exit('Prosím vyplňte všechna pole!');
}
if ($stmt = $con->prepare('SELECT id, psw FROM accounts WHERE name = ?')) {
	$stmt->bind_param('s', $_POST['name']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $psw);
	$stmt->fetch();
	
	if ($_POST['psw'] === $psw) { //Uspěšně připojeno
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['id'] = $id;
		header('Location: logged/home.php');
	}
	}
} else {
	header('Location: menu/login.html');
}


	$stmt->close();
?>