<?php
//���޸ĸ�����Ϣҳ��edituser.php���л�ȡ�������ݸ������ݿ�
require_once 'functions/functions.php';
conndb();
echo "��Ҫ�������ϵ�ѧ��Ϊ��".$_POST['editid'];

echo "<br>---------------</br>";
$id=$_POST['editid'];
$username=$_POST['editname'];
$userage=$_POST['editage'];
$usersex=$_POST['editsex'];
//$id=intval($id);
$result=mysql_query("update users SET name='$username',age='$userage',sex='$usersex' WHERE id=$id");
if(mysql_errno())
{
    echo "�������Ϊ��".mysql_errno();
}
else
{
    header("Location:database.php");    
}
