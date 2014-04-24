<?php

require '../../vendor/autoload.php';

$imagine = new Imagine\Gd\Imagine();
$size    = new Imagine\Image\Box(100, 100);
$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET; //ou Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND 
$imagine->open('/vagrant/public/imagine/images/source/1.jpg')
        ->thumbnail($size, $mode) 
        ->save('/vagrant/public/imagine/images/generated/1-thumb.jpg');
?>
<img src="images/source/1.jpg"> 
<img src="images/generated/1-thumb.jpg">