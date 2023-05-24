<?php

require_once 'config.php';
require_once 'config.php';

function connect($host, $dbname, $charset, $password) {
        
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    $this->pdo = new PDO($dsn, $dbname, $password, $options);
}

return connect($host, $dbname, $charset, $password);




