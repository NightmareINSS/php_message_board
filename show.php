<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<?php
require "php7.php";
$mysql_server_name = "127.0.0.1";
$mysql_username = "root";
$mysql_password = "root";
$mysql_database = "GBOOK";

$sql = "SELECT * FROM gbook ORDER BY 'id' DESC"; //排序 后留言的在前面显示

$conn = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);

mysql_select_db($mysql_database, $conn);
$result = mysql_query($sql, $conn);
$count = 0;
while ($row = mysql_fetch_row($result)) {
	// ----if语句判断男女------
	$count++;
	if ($row[2] == 1) {$gender = '男';} else { $gender = '女';}
	?>
<table width="752" border="1">
  <tr>
    <td height="32">
    <p><?=$row[6];?> <?=$row[5];?> </p>
    <p><?=$row[1]?>(<?=$gender?>)  <?=$row[3]?></p></td>
  </tr>
  <tr>
    <td height="45">
    <?=nl2br($row[4])?>
	    <p>
	    	<br>
	    	<br>
	  	  <a href="change.php?id=<?=$row[0]?>">[修改]</a> <a href="del.php?id=<?=$row[0]?>">[删除]</a>
	    </p>
    </td>
  </tr>
</table>
<hr />
<?php
}
if ($count == 0) {
	echo "No more Words<br>";
}
mysql_close($conn);
mysql_free_result($result);
?>
