<?php
require_once 'functions/functions.php';
$name=$_GET['name'];
//echo $name;
if(empty($name))
{
    die ("请输入名字");
}
$age=$_GET['age'];
if(empty($age))
{
    die ("请输入年龄");
}
$sex=$_GET['sex'];
if(empty($sex))
{
    die ("请输入性别");
}
conndb();
$age=intval($age);
mysql_query("INSERT INTO users (name,age,sex) VALUES('$name',$age,'$sex')");
if(mysql_errno())
{
    echo mysql_errno();
}
else 
{
    header('Location:database.php'); 
}