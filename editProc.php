<?php
include_once('check_mypage.php');
?>

<?php
// filename: upload.processor.php 

// first let's set some variables 

// make a note of the current working directory, relative to root. 
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the directory that will recieve the uploaded file 
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'profiles/'; 

// make a note of the location of the upload form in case we need it 
//$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.php'; 

// make a note of the location of the success page 
$uploadSuccess = 'index.php'; 

// fieldname used within the file <input> of the HTML form 
$fieldname = 'fileX'; 

// Now let's deal with the upload 

// possible PHP upload errors 
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached'); 

// check the upload form was actually submitted else print the form 


if ($_POST['replace'] == 'new'){
		
		// check for PHP's built-in uploading errors 
		($_FILES[$fieldname]['error'] == 0) 
			or error($errors[$_FILES[$fieldname]['error']], $uploadForm); 
			 
		// check that the file we are working on really was the subject of an HTTP upload 
		@is_uploaded_file($_FILES[$fieldname]['tmp_name']) 
			or error('not an HTTP upload', $uploadForm); 
			 
		// validation... since this is an image upload script we should run a check   
		// to make sure the uploaded file is in fact an image. Here is a simple check: 
		// getimagesize() returns false if the file tested is not an image. 
		@getimagesize($_FILES[$fieldname]['tmp_name']) 
			or error('only image uploads are allowed', $uploadForm); 
			 
		// make a unique filename for the uploaded file and check it is not already 
		// taken... if it is already taken keep trying until we find a vacant one 
		// sample filename: 1140732936-filename.jpg 
		$now = 1; 
		while(file_exists($uploadFilename = $uploadsDirectory . $now . $_FILES[$fieldname]['name'])) 
		{ 
			$now++; 
		} 
		
		// now let's move the file to its final location and allocate the new filename to it 
		@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename) 
			or error('receiving directory insuffiecient permission', $uploadForm); 
}
// If you got this far, everything has worked and the file has been successfully saved. 
// We are now going to redirect the client to a success page. 
//header('Location: ' . $uploadSuccess); 

// The following function is an error handler which is used 
// to output an HTML error page if the file upload fails 

function error($error, $location, $seconds = 5) 
{ 
    header("Refresh: $seconds; URL=" .$location); 
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"'."n". 
    '"http://www.w3.org/TR/html4/strict.dtd">'."nn". 
    '<html lang="en">'."n". 
    '    <head>'."n". 
    '        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">'."nn". 
    '        <link rel="stylesheet" type="text/css" href="/css/upload.css">'."nn". 
    '    <title>Upload error</title>'."nn". 
    '    </head>'."nn". 
    '    <body>'."nn". 
    '    <div id="Upload">'."nn". 
    '        <h1>Upload failure</h1>'."nn". 
    '        <p>An error has occurred: '."nn". 
    '        <span class="red">' . $error . '...</span>'."nn". 
    '         The upload form is reloading</p>'."nn". 
    '     </div>'."nn". 
    '</html>'; 
    exit; 
} // end error handler 

?>
<?php
if (PHP_VERSION>='5'){
 require_once('domxml-php4-to-php5.php');
}
$doc = domxml_new_doc('1.0');
$root = $doc->add_root('user');


$root->new_child('first',$_POST["first"]);
$root->new_child('last',$_POST["last"]);
if ($_POST['replace'] == 'new'){
	$root->new_child('image',$now . $_FILES[$fieldname]['name']);	
}else{
	$root->new_child('image',$_POST["existing"] );
}
$root->new_child('role','none');
$root->new_child('misc','this is a test');


$fp = @fopen($_SESSION["user"]. '.xml','w+');
if(!$fp) {
    die('Error cannot create XML file');
}
fwrite($fp,$doc->dump_mem());
fclose($fp);
header("Location: index.php");
die();
?>