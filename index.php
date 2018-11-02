<?php
header('Content-type: image/gif');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//Set the Content Type
   $imagesDir = 'images/';
   $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
   $randomImage = $images[array_rand($images)];
   
   readfile($randomImage);

?>