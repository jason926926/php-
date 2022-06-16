<?php
    #require:必須 require_once:一次 include:可有可無
    $hostname = 'localhost';
    $username = 'id19072559_jason';
    $password = 'F/=zA@4]cM?~3Oa#';
    $dbname = 'id19072559_southpark';

    $link = mysqli_connect($hostname,$username, $password, $dbname);
    $link -> set_charset("UTF8");
?>