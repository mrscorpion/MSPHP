<?php
require_once 'functions/functions.php';
conndb();
$result=mysql_query("SELECT * FROM users");
if(!$result)
{
    echo "查询的数据表有误，请检查或重新输入";
}
$count=mysql_num_rows($result);
echo "<table style='text-align:left' border=1>
    <tr><th>学号</th><th>姓名</th><th>年龄</th><th>性别</th><th>修改</th></tr>";
    for($i=0;$i<$count;$i++)
    {
        $result_arr=mysql_fetch_assoc($result);
        $id=$result_arr['id'];
        $name=$result_arr['name'];
        $age=$result_arr['age'];
        $sex=$result_arr['sex'];
        echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$sex</td><td><a href=edituser.php?id=$id>修改</a></td></tr>";
    }
echo "</table>";