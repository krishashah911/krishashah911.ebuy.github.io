<?php
	session_start();
	$_SESSION['username'] = null;
    $_SESSION['success'] = null;
    header("Location: ./index.php");
    session_destroy();
?>