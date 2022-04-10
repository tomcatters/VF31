<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php_project1";

/*fonction mysqli_connect() ouvre une nouvelle connexion vers un server mysql, paramètres "host, username, password, dbname" */

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");