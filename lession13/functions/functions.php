<?php
require_once 'config/config.php';
function conndb()
{
    $conn= mysql_connect(Host,User,UserPw);
    if(!$conn)
    {
        die("数据库连接失败了！");
    }
    mysql_select_db('student');
    return $conn;
}