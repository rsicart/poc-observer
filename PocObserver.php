<?php

require_once(__DIR__ . '/Concert.php');
require_once(__DIR__ . '/Fan.php');


$fan1 = new Fan('Fan 1');
$fan2 = new Fan('Fan 2');

$concert = new Concert('AC/DC');
$concert->addObserver($fan1);
$concert->addObserver($fan2);

$concert->setStatus('The group is entering the scene');
sleep(2);

$concert->setStatus('The group is ready');
sleep(2);

$concert->setStatus('Concert started');
sleep(2);

$concert->setStatus('Pause');
sleep(5);

$concert->setStatus('Concert restarted');
sleep(2);

$concert->setStatus('The end');

$concert->removeObserver($fan1);
$concert->removeObserver($fan2);

$concert->setStatus('Anybody here?');
