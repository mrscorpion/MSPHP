<?php
require_once 'functions/functions.php';
conndb();
$result=mysql_query("SELECT * FROM users");
if(!$result)
{
    echo "��ѯ�����ݱ������������������";
}
$count=mysql_num_rows($result);
echo "<table style='text-align:left' border=1>
    <tr><th>ѧ��</th><th>����</th><th>����</th><th>�Ա�</th><th>�޸�</th></tr>";
    for($i=0;$i<$count;$i++)
    {
        $result_arr=mysql_fetch_assoc($result);
        $id=$result_arr['id'];
        $name=$result_arr['name'];
        $age=$result_arr['age'];
        $sex=$result_arr['sex'];
        echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$sex</td><td><a href=edituser.php?id=$id>�޸�</a></td></tr>";
    }
echo "</table>";