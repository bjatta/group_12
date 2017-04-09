<?php

use Core\DB\Connector;
use Core\DB\QueryBuilder;

require_once __DIR__. '/../vendor/autoload.php';

/*require_once "core/Request.php";
require_once "core/Router.php";
require_once "core/db/QueryBuilder.php";
require_once "core/db/Connector.php";
require_once "Controllers/TodoController.php";
require_once "Controllers/MainController.php";*/


$config = require_once 'Config/config.php';

$queryBuilder = new QueryBuilder(
    Connector::getConnection($config['database'])
);