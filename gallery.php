<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>

<div class="booking-img">
<img src="images/covers/gallery.jpg" style="margin-top:-2%">
<h1 class="center">Gallery</h1>	
</div>



<div class="col-md-10 col-md-offset-1">
<?php

	
    // Include the UberGallery classs
    include('resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory('gallery-images');

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }





?>


</div>


 
<?php include "includes/footer.php" ?>