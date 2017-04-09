<?php

use Core\App;
use Core\DB\Connector;
use Core\DB\QueryBuilder;

require_once __DIR__. '/../vendor/autoload.php';



App::set('config', require_once 'Config/config.php');

App::set('db', new QueryBuilder(
    Connector::getConnection(App::get('config')['database'])
));