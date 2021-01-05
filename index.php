<?php 

require 'vendor/autoload.php';

$querey = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());