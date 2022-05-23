<?php

$cleardb_url = parse_url(getenv("mysql://baefa84ead3c8f:f15bb469@us-cdbr-east-05.cleardb.net/heroku_15391bb2dd5489c?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["baefa84ead3c8f"];
$cleardb_password = $cleardb_url["f15bb469"];
$cleardb_db = substr($cleardb_url["owlphin"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$db_connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}/* else{
echo "Successful connected to database!";
} */

?>
