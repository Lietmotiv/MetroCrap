<?php
include_once('get_user_page.php');

$mypage = get_user_page();

if ($_GET['debug'])
	echo "myPage:" . $mypage . "<br>";
check_file($mypage);

$userfile = get_user();
check_user($userfile);

	if ($_GET['debug'])
		echo "userfile:" . $userfile . "<br>";
//header("Location: /" . $mypage);

function check_file($filename) {
	//Check if the user has been logged in before. If not it creates templates for them.
	if (!file_exists($filename)) {
		ob_start();
		
		//echo $filename . ' does not exist - will create<br>';
		$url = 'template.php';
		
		//echo $url . '<br>';
		$handle = fopen($filename, "w+") or die('Cannot open file:  '.$filename);
		$source = file_get_contents($url);
		//echo 'this is source of file to be written: ' . $source . '<br>';
		fwrite($handle, $source);
		ob_flush();
		fclose($handle);
	}
	return 1;
}
function check_user($filename) {
	//Check if the user has been logged in before. If not it creates templates for them.
	if (!file_exists($filename)) {
		ob_start();
		
		//echo $filename . ' does not exist - will create<br>';
		$url = 'user.xml';
		
		//echo $url . '<br>';
		$handle = fopen($filename, "w+") or die('Cannot open file:  '.$filename);
		$source = file_get_contents($url);
		//echo 'this is source of file to be written: ' . $source . '<br>';
		fwrite($handle, $source);
		ob_flush();
		fclose($handle);
	}
	return 1;
}
?>