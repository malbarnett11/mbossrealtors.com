<?php
	
$serverName= "localhost";	
$dbUsername= "root";	
$dbPassword= "";	
$dbname= "phpproject01";

//Create connection
$conn = new mysqli($serverName, $dbUsername , $dbPassword, $dbname);

//Check connection
if ($conn->connect_error) {
die("Connection failed:" .$conn->connect_error);
}
