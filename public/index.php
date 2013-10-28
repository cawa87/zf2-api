<?php

chdir(dirname(__DIR__));

// Так же мы возьмем инициализацию автозагрузчика
require 'init_autoloader.php';

define('BASE_DIR', dirname(__DIR__));

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();