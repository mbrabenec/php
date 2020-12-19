<?php 

require 'database/Connection.php';
require 'database/QuereyBuilder.php';

return new QuereyBuilder(Connection::make());

?>