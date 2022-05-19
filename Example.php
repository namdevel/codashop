<?php
use Namdevel\Codashop;

require(__DIR__ . '/vendor/autoload.php');

$app = new Codashop();

echo $app->gameList();

echo $app->checkUser('MOBILE_LEGENDS', 161307989, 2244);