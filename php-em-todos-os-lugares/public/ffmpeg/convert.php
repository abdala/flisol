<?php

require '../../vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('/vagrant/public/ffmpeg/videos/source/1.m4v');

$video->save(new FFMpeg\Format\Video\X264('libvo_aacenc'), '/vagrant/public/ffmpeg/videos/generated/1.mp4')
      ->save(new FFMpeg\Format\Video\WMV(), '/vagrant/public/ffmpeg/videos/generated/1.wmv')
      ->save(new FFMpeg\Format\Video\WebM(), '/vagrant/public/ffmpeg/videos/generated/1.webm');

echo "Gerado";