<?php

require '../../vendor/autoload.php';

$imagine = new Imagine\Gd\Imagine();
$size    = new Imagine\Image\Box(100, 100);
$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET; //ou Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND 

$watermark = $imagine->open('/vagrant/public/imagine/images/source/flisol.png');
$image     = $imagine->open('/vagrant/public/imagine/images/source/1.jpg');
    
$size        = $image->getSize();
$wSize       = $watermark->getSize();    
$bottomRight = new Imagine\Image\Point(10, 10);

$image->paste($watermark, $bottomRight)
      ->save('/vagrant/public/imagine/images/generated/1-watermark.jpg');
?>
<img src="images/generated/1-watermark.jpg">