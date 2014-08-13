<?php
include_once('check_mypage.php');
header("P3P: CP=\"CURa ADMa DEVa CONo HISa OUR IND DSP ALL COR\"");
?>
<!DOCTYPE html>

<?php
include "xml.php";
include "messagesXML.php";
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">

    <link href="/css/modern.css" rel="stylesheet">
    <link href="/css/theme-dark.css" rel="stylesheet">
    <link href="/css/modern-responsive.css" rel="stylesheet">

    <script src="/js/assets/jquery-1.8.2.min.js"></script>
    <script src="/js/assets/google-analytics.js"></script>
    <script src="/js/assets/jquery.mousewheel.min.js"></script>
    <script src="/js/assets/github.info.js"></script>
    <script src="/js/modern/tile-slider.js"></script>
    <script src="/js/modern/start-menu.js"></script>
    <!--<script src="/js/modern/tile-drag.js"></script>-->

    <title>CBM Intranet</title>
	<script type="text/javascript">
          
	</script>
    
</head>
<body class="metrouicss">
<div class="page secondary fixed-header">
    <div class="page-header ">
        <div class="page-header-content">
            <div class="user-login">
                <a href="edit.php">
                    <div class="name">
                        <span class="first-name"><?php echo $xml-> first; ?></span>
                        <span class="last-name"><?php echo $xml-> last; ?></span>
                       
                    </div>
                    <div class="avatar">
                        <img src="/profiles/<?php echo $xml-> image; ?>"/>
                    </div>
                </a>
            </div>

            <h1 class="fg-color-white"><img src="/images/cbmLogo1.png" width="200" height="75"></h1>
        </div>
    </div>


<?php 
include "template.php";
?>
</div>


</body>
</html>