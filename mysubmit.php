<?php
$connect=mysql_connect('localhost','root','1234');
$select=mysql_select_db ("NDL", $connect);
date_default_timezone_set(PRC);
@mysql_query("insert into liuyan (mycontent,mytime) values ('".nl2br($_POST[mycontent])."','".date('Ymd H:i:s')."')");

echo "ÁôÑÔ³É¹¦£¡<br><a href=\"liuyan.html\">·µ»Ø</a>";

?>