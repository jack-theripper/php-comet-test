<?php

use Symfony\Component\Process\ExecutableFinder;

require __DIR__ . '/../vendor/autoload.php';

$ffmpegPath = (new ExecutableFinder())->find('ffmpeg', false);

var_dump($ffmpegPath);