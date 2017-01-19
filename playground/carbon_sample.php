<?php

require_once __DIR__ . "/vendor/autoload.php";

use \Carbon\Carbon;

echo Carbon::now() . PHP_EOL;

// echo Carbon::parse('20140227155930103');
echo Carbon::parse('20140227155930') . PHP_EOL;

echo Carbon::parse(substr('20140227155930103',0,14)) . PHP_EOL;

$c = Carbon::parse(substr('20140227155930103',0,14));
$d = Carbon::parse(substr('20140227155931107',0,14));

var_dump(strtotime($c));
var_dump(strtotime($d));

var_dump($c->eq($d));

var_dump(strtotime($c->format('Ymd')), strtotime($d->format('Ymd')));
