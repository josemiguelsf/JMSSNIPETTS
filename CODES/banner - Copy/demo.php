<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

require "connect.php";
require "banner.class.php";

$bannerResult = mysql_query("SELECT * FROM banners");

$banners = array();
while($row=mysql_fetch_assoc($bannerResult))
{
	$banners[] = new Banner($row);
}

// Randomizing the $banners array:
shuffle($banners);

// Splitting the banners array into smaller arrays with 4 banners each:
$bannerGroups = array_chunk($banners,4);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Banner Rotator With PHP, jQuery &amp; MySQL | Tutorialzine demo</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

<h1>Simple Banner Rotator With PHP, jQuery &amp; MySQL</h1>
<h2><a href="http://tutorialzine.com/2010/04/simple-banner-rotator-with-php-jquery-mysql/">Go Back to the Tutorial &raquo;</a></h2>

<div id="main">

   <!-- Two groups of banners -->

   <ul class="bannerHolder">
        <?php
		
		// Looping through the first group:
		foreach($bannerGroups[0] as $ban)
		{
			echo '<li>'.$ban->html().'</li>';
		}

        ?>
    </ul>
    
    <ul class="bannerHolder">
        <?php

		// Looping through the second group:
		
		foreach($bannerGroups[1] as $ban)
		{
			echo '<li>'.$ban->html().'</li>';
		}

        ?>
    </ul>
    
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
