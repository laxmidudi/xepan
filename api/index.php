<?php

// chdir('../');
include '../atk4/loader.php';
include '../vendor/autoload.php';
include 'lib/Api.php';

$api = new Api('apisrv');
$api->main();