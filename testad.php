<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
/ include('ntlm.php');
 
function get_ntlm_user_hash($user) {
    $userdb = array('loune'=>'test', 'you'=>'gg', 'a'=> 'a');
 
    if (!isset($userdb[strtolower($user)]))
        return false;
    return mhash(MHASH_MD4, ntlm_utf8_to_utf16le($userdb[strtolower($user)]));
}
 
session_start();
$auth = ntlm_prompt("testwebsite", "testdomain", "mycomputer", "testdomain.local", "mycomputer.local", "get_ntlm_user_hash");
 
if ($auth['authenticated']) {
    print "You are authenticated as $auth[username] from $auth[domain]/$auth[workstation]";
}
 
?>
</body>
</html>