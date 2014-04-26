<?php

require '../../vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('/vagrant/public/ffmpeg/videos/source/1.m4v');

$video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(32))
      ->save('/vagrant/public/ffmpeg/videos/generated/frame.jpg');

echo "Gerado";