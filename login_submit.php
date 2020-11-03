<?php
$username=$_POST['username'];
$password=$_POST['password'];
$connect=mysql_connect('localhost','root','1234');
$select=mysql_select_db("NDL",$connect);
$flag=@mysql_query("select psd from user 
where name='$username'");
$result=mysql_fetch_array($flag);
if($password == $result[psd])
    {
        echo "登录成功!<br><a href='liuyan-free.html'>进入留言板</a>";
    }
else echo "登录失败!再见！";
?>