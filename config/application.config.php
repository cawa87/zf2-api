<?php
return array(
    // Загружаеммые модули
    'modules' => array(
        'v1',
        'DoctrineModule',
        'DoctrineORMModule',
    ),
    // Настройка "слушателей для ModuleManager
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        // Настройка путей для глобальных и локальных конфигов
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        // Включаем проверку зависимости модулей
        'check_dependencies' => true,
    ),
);
