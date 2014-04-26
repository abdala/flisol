<?php

require '../../vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('/vagrant/public/ffmpeg/videos/source/1.m4v');

$video->filters()
      ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
      ->synchronize();

$video->save(new FFMpeg\Format\Video\X264('libvo_aacenc'), '/vagrant/public/ffmpeg/videos/generated/1-resize.mp4')
      ->save(new FFMpeg\Format\Video\WMV(), '/vagrant/public/ffmpeg/videos/generated/1-resize.wmv');

echo "Gerado";