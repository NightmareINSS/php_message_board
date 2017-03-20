<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>留言版</title>
</head>
<p><a href="show.php">[返回]</a></p>
<?php
require "php7.php";
$mysql_server_name = "127.0.0.1";
$mysql_username = "root";
$mysql_password = "root";
$mysql_database = "GBOOK";
$id = $_GET[id];
$conn = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);

if ($conn == FALSE) {
} else {

	echo "<br>";
}
mysql_select_db($mysql_database, $conn);
$sql = "SELECT * FROM gbook WHERE id='$id' ";
$result = mysql_query($sql, $conn);

$row = mysql_fetch_row($result);

if ($row) {
	$exist = TRUE;
} else {
	echo "ERROR : It 's not exist!<br>";
	$exist = FALSE;
}
$sql = "DELETE FROM gbook WHERE id = '$id' ";
$result = mysql_query($sql, $conn);
if ($result == 'TURE' && $exist == 'TRUE') {
	echo "Delete success!";
} else {
	echo "Delete failed!";
}
mysql_close($conn);

?>
