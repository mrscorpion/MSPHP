<?php
require_once 'config/config.php';
function conndb()
{
    $conn= mysql_connect(Host,User,UserPw);
    if(!$conn)
    {
        die("���ݿ�����ʧ���ˣ�");
    }
    mysql_select_db('student');
    return $conn;
}