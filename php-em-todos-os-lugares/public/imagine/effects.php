<?php

require '../../vendor/autoload.php';

$imagine = new Imagine\Gd\Imagine();
$transformation = new Imagine\Filter\Transformation();

$image = $imagine->open('/vagrant/public/imagine/images/source/1.jpg');

$image->effects()->grayscale();

$color = new Imagine\Image\Color('f00');
$border = new Imagine\Filter\Advanced\Border($color, 10, 10);
// $transformation->add($border); 

$transformation->apply($image)->save('/vagrant/public/imagine/images/generated/1-effects.jpg');
?>
<img src="images/source/1.jpg"> 
<img src="images/generated/1-effects.jpg">