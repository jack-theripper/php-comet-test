<?php

use Symfony\Component\Process\ExecutableFinder;
use Phalcon\Mvc\Micro;

require __DIR__ . '/../vendor/autoload.php';

$ffmpegPath = (new ExecutableFinder())->find('ffmpeg', false);

var_dump($ffmpegPath);

$process = new \Symfony\Component\Process\Process([$ffmpegPath, '-version']);
$process->mustRun();

echo '<pre>'.$process->getOutput().'</pre>';



$app = new Micro();

// Retrieves all robots
$app->get('/api/robots', function () {
        echo '// Operation to fetch all the robots';
    }
);


$app->handle();

phpinfo();