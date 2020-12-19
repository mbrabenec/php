<?php 

$querey = require 'bootstrap.php';

$tasks = $querey->selectAll('todos');


die(var_dump($tasks));


require 'index.view.php';



