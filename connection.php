<?php

$server = "localhost";
$user = "donut_login";
$password = "Zse123";
$database = "popaczkowani";

$link = mysqli_connect($server, $user, $password, $database);

mysqli_set_charset($link, "utf8");

?>