<html>
<head>
</head>

<body>

<?php
$connect=mysql_connect('localhost','root','1234');
$select=mysql_select_db ("NDL", $connect);



$result=@mysql_query("select * from liuyan order by id desc;");
while($row = mysql_fetch_array($result)) {
echo "(".$row["mytime"].")<br>";
echo $row["mycontent"]."<br>";
echo "<br>";
}
mysql_close($connect);


?>
<a href="liuyan-free.html">·µ»Ø</a>


</body>
</html>