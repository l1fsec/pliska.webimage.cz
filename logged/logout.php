<?php

//pozor na session start
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../../menu/login.html');
?>
