<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>phpstart</title>
</head>

<body>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("test1");
  if(isset($_REQUEST['name']))
  {
    $sql=mysql_query("insert into demo(`content`) values ('".$_REQUEST['name']."')");
   }
?>
   <form method="post" action="">
   	<input type="text" name="name">
   	<input type="submit" value="submit" name="sub">
   </form>
</body>
</html>
