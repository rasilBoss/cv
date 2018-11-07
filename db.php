<?php

$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="project_001";

$conn=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if(!$conn){
	echo "server not connect";
}

?>