<?php

    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','https://localhost/PHProject/mvc/Views/pages/');
    define('INCLUDE_PATH','https://localhost/PHProject/');

    $app = new mvc\Application();

    $app->run();

?>