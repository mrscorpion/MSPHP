<?php
require_once 'functions/functions.php';
$name=$_GET['name'];
//echo $name;
if(empty($name))
{
    die ("����������");
}
$age=$_GET['age'];
if(empty($age))
{
    die ("����������");
}
$sex=$_GET['sex'];
if(empty($sex))
{
    die ("�������Ա�");
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