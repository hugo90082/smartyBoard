<?php
	require_once 'header.php';
	loginPageCheck();
	$mail = $_SESSION['mail']??""; 
	$smarty->assign('mail', $mail);
	unset($_SESSION['mail']);
	$smarty->display('login.html');
	
?>