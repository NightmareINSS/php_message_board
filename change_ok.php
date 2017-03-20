<?php
require "php7.php";
$mysql_server_name = "127.0.0.1";
$mysql_username = "root";
$mysql_password = "root";
$mysql_database = "GBOOK";
$name = $_POST[name];
$sex = $_POST[sex];
$email = $_POST[email];
$info = $_POST[info];
$id = $_GET[id];

$sql = "UPDATE gbook SET name = '$name',sex = '$sex',email = '$email',info = '$info' WHERE id ='$id' ";
$conn = mysqli_connect($mysql_server_name, $mysql_username, $mysql_password);
if ($conn == FALSE) {
	echo "Couldn't Connect<br>";
} else {
	echo "Connected!<br>";

}

mysqli_select_db($conn, $mysql_database);
$result = mysql_query($sql, $conn);
if ($result == FALSE) {
	echo "Couldn't UPDATE<br>" . mysqli_error($conn);
} else {
	echo "UPDATED!<br>";
}

mysql_close($conn);

?>
<p><a href="show.php">[返回]</a></p>