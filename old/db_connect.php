<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "ricettale";
//connection to the database
$connection = mysql_connect($host, $username, $password)  or die("Unable to connect to MySQL");
//select a database to work with
$dbconn = mysql_select_db($db,$connection)   or die("Could not select database");
?>