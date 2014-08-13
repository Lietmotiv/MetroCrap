<?php

 // Change this for live mode $_SERVER['REMOTE_USER'])
session_start();

if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {	

//if ($_GET['debug'])
	//echo "111111";
	
//	$userX = $_SESSION['user'];

}else{
	
	//if ($_GET['debug'])
	//echo "000000";		

	$userX = $_GET['REMOTE_USER'];
	$_SESSION['user'] = str_replace("CBM","",$userX);
	

}
if ($_GET['debug'])
echo $_SESSION['user'];

if ($_GET['debug']){
	echo "-isset" . isset($userX) . "<br>";
	echo "-empty" . empty($userX). "<br>";
	echo "-is_null" . is_null($userX). "<br>";
	
	echo "-isset" . isset($_SESSION['user']) . "<br>";
	echo "-empty" . empty($_SESSION['user']). "<br>";
	echo "-is_null" . is_null($_SESSION['user']). "<br>";
	echo "Value: session: " . $_SESSION['user']. " - userX: " . $userX ."<br>";
}

function get_user_page() {

	$user = preg_replace("/[^A-Za-z0-9 ]/", '', $_SESSION['user']);
	$mypage = $user . '.php';

	if ($_GET['debug'])
		echo "99Value: session: " . $_SESSION['user']. " - userX: " . $userX ."<br>";

	return $mypage;
	
}
function get_user(){

	$userXML = preg_replace("/[^A-Za-z0-9 ]/", '', $_SESSION['user']);
	$userXML = $userXML . '.xml';
	
	if ($_GET['debug'])
		echo "88Value: session: " . $_SESSION['user']. " - userX: " . $userX ."<br>";

	return str_replace("CBM","",$userXML);

}


?>