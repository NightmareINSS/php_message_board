<?php
require "php7.php";
$name = $_POST[name];
$sex = $_POST[sex];
$email = $_POST[email];
$info = $_POST[info];

$mysql_server_name = "localhost";
$mysql_username = "root";
$mysql_password = "root";
$mysql_database = "GBOOK";

$ip = getenv('REMOTE_ADDR');

$conn = mysql_connect("localhost", "root", "root");
mysql_select_db($mysql_database, $conn);
$sql = "INSERT INTO `gbook` ( `id` , `name` , `sex` , `email` , `info` , `ip` , `time_at` )
VALUES (NULL , '$name', '$sex', '$email', '$info', '$ip', NOW( ))";
$result = mysql_query($sql, $conn);
$id = mysql_insert_id($conn);
mysql_close($conn);

?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<p>留言成功</p>
<p><a href="show.php">去留言页 </a></p>