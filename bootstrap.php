<?php 

$app = [];                  // hiding DB stuff in app for claity

$app['config'] = require 'config.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QuereyBuilder.php';


$app['database'] = new QuereyBuilder(

    Connection::make($app['config']['database'])

);

?>