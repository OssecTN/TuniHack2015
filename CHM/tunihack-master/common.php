<?php
session_start();

$json='[]';
if (!isset($_SESSION['name']))
	$_SESSION['name'] = "Guest";

if (!isset($_SESSION['email']) && !isset($login))
{	
	header('location:login.php');
	exit;
}


if (isset($_SESSION['email'])){

	if (!isset($_SESSION['address_wallet'])){
	$json = file_get_contents('http://ssh.chaker.tn:12345/getaccountaddress/'. $_SESSION['name']);

	$_SESSION['address_wallet'] = json_decode($json, true);
	}

	if (!isset($_SESSION['getaddressbalance']) || $_SESSION['timerefresh']< time())	
	{

		$_SESSION['getaddressbalance'] = json_decode(
		file_get_contents('http://ssh.chaker.tn:12345/getaddressbalance/'. $_SESSION['address_wallet']));
		$_SESSION['getaddressbalance'] =  json_decode($json, true);
		$_SESSION['timerefresh'] = time() + 30;
	}
}
?>
