<?php
$connect=mysql_connect('localhost','root','1234');
$select=mysql_select_db("NDL",$connect);
@mysql_query("insert into user (name,psd) values 
('$_POST[username]','$_POST[password]')");
echo "×¢²á³É¹¦<br>";
echo "<a href='login.html'>Ç°ÍùµÇÂ¼</a>"
?>