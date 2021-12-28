<?php

require_once( realpath(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');
require_once( realpath(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'menu.php');
require_once(ROOT .'core' . DS . 'autoload.php');

Core\Autoload::run();

set_error_handler('Core\Errors::errorHandler');
set_exception_handler('Core\Errors::exceptionHandler');

Core\Routers::start(new \Core\Requests());