<?php
//从修改个人信息页（edituser.php）中获取最新数据更新数据库
require_once 'functions/functions.php';
conndb();
echo "需要更改资料的学号为：".$_POST['editid'];

echo "<br>---------------</br>";
$id=$_POST['editid'];
$username=$_POST['editname'];
$userage=$_POST['editage'];
$usersex=$_POST['editsex'];
//$id=intval($id);
$result=mysql_query("update users SET name='$username',age='$userage',sex='$usersex' WHERE id=$id");
if(mysql_errno())
{
    echo "错误代码为：".mysql_errno();
}
else
{
    header("Location:database.php");    
}
