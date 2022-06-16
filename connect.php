<?php
    #require:必須 require_once:一次 include:可有可無
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'connect';

    $conn = mysqli_connect($hostname,$username, $password, $dbname);
    $conn -> set_charset("UTF8");
?>