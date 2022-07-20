<?php

use Symfony\Component\Process\ExecutableFinder;

require __DIR__ . '/../vendor/autoload.php';

$ffmpegPath = (new ExecutableFinder())->find('ffmpeg', false);

var_dump($ffmpegPath);

$process = new \Symfony\Component\Process\Process([$ffmpegPath, '-version']);
$process->mustRun();

echo '<pre>'.$process->getOutput().'</pre>';

phpinfo();