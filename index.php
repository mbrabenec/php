<?php 

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = returnAllResults($pdo);

var_dump($tasks);

// print_r($tasks); // can also use var_dump / var_export;
//print_r($tasks[0]->description); // can also use var_dump / var_export;

require 'index.view.php';



