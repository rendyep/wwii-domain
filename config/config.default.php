<?php

$config = array(
    "database" => array(
        "driver" => "driver",
        "host" => "localhost",
        "port" => "3306",
        "user" => "username",
        "password" => "password",
        "dbname" => "database",
    ),

    "doctrine_mappings" => array(
        __DIR__ . "/orm/mappings/xml/wwii/erp/finding",
        __DIR__ . "/orm/mappings/xml/wwii/erp/it_inventory",
        __DIR__ . "/orm/mappings/xml/wwii/erp/quality_control",
        __DIR__ . "/orm/mappings/xml/wwii/erp/quality_control/general_inspection",
        __DIR__ . "/orm/mappings/xml/wwii/hrd/pelamar",
        __DIR__ . "/orm/mappings/xml/wwii/hrd/karyawan",
        __DIR__ . "/orm/mappings/xml/wwii/hrd/cuti",
    ),
);


if (file_exists(__DIR__ . '/config.sensitive.php')) {
    $config = array_merge($config, include(__DIR__ . '/config.sensitive.php'));
}

return $config;
