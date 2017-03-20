
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>留言版</title>
</head>

<body>


<form name="form1" method="post" action="insert.php">
  <p>你的名字：<input type="text" name="name" size="20" /></p>
  <p>你的性别：<input type="radio" value="1" name="sex" checked="checked" />男生     <input type="radio" value="0" name="sex" />女生 </p>
  <p>你的E-mail:<input type="text" name="email" size="20" /></p>
  <p>你的留言内容:</p>
  <p><textarea rows="9" name="info" cols="35"></textarea></p>
  <p><input type="submit" value="提交" name="B1" /><input type="reset" value="重设" name="B2" /></p>
</form>

</body>

</html>