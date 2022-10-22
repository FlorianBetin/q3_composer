<?php

require 'vendor/autoload.php';
use CowSay\Cow;

$choupette = new Cow('Moooo, I\'m delicious');
$choupette->setEyes('><')
    ->setTongue('U')
    ->setUdder('W');
$output = $choupette->say();
echo $output;