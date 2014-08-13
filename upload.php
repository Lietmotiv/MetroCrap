<?php 

// filename: upload.form.php 

// first let's set some variables 

// make a note of the current working directory relative to root. 
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the location of the upload handler script 
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php'; 

// set a max file size for the html upload form 
$max_file_size = 300000; // size in bytes 

// now echo the html page 
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">

    <link href="/css/modern.css" rel="stylesheet">
    <link href="/css/theme-dark.css" rel="stylesheet">
    <link href="/css/modern-responsive.css" rel="stylesheet">

    <script src="/js/assets/jquery-1.8.2.min.js"></script>
    

<title>CBM Intranet Edit Page</title>
    <style>
	label, * {
	color:#FFFFFF !important;	
	}
	</style>
</head>
<body class="metrouicss" style="padding:20px;">
    <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">
      <p> 
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> 
        </p> 
         
        <p> 
            <label for="file">File to upload:</label> 
            <input id="file" type="file" name="file"> 
        </p> 
                 
        <p> 
            <label for="submit">Press to...</label> 
            <input id="submit" type="submit" name="submit" value="Upload me!"> 
        </p> 
     
    </form> 
     
     
    </body> 

</html> 