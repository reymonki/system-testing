<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'admin' && $password == 'admin'){
		$_SESSION['login'] = 1;
		$_SESSION['loginGroup'] = 'admin';
		$_SESSION['loginUsername'] = 'admin';
		$_SESSION['loginName'] = 'Administrator';

		header('location: index.php');
	} 

	else if($username == 'pengusul' && $password == 'pengusul'){
		$_SESSION['login'] = 1;
		$_SESSION['loginGroup'] = 'pengusul';
		$_SESSION['loginUsername'] = 'pengusul';
		$_SESSION['loginName'] = 'Pengusul';

		header('location: index.php');
	} 

	else{
		$_SESSION['error'] = 1;
		header('location: index.php');
	}
?>