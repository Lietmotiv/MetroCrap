	<?php
include_once('check_mypage.php');
?>
<!DOCTYPE html>
<?php
include "xml.php";
$max_file_size = 300000; // size in bytes 
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
    
</head>
<body class="metrouicss" style="padding:20px;">
<h1 class="text-rest-state">EDIT USER</h1>
<form action="editProc.php" method="post" name="edit" id="edit"  enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> 
<input type="hidden" name="existing" value="<?php echo $xml-> image; ?>">
  <p class="text-rest-state" >Name (First / Last): 
    
    <input type="text" name="first" id="first" value="<?php echo $xml-> first; ?>">
        <input type="text" name="last" id="last" value="<?php echo $xml-> last; ?>">
  </p>
  <p class="text-rest-state" >&nbsp;</p>
  <p class="text-rest-state" ><img src="/profiles/<?php echo $xml-> image; ?>" width="75" height="75"></p>
  <p class="text-rest-state">Upload new Image?<input name="replace" type="checkbox" value="new"> </p>
  <p class="text-rest-state"><input id="fileX" type="file" name="fileX"> </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>