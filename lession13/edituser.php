<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
         if(!empty($_GET['id']))
         {
             require_once 'functions/functions.php';
             conndb();
             $id=intval($_GET['id']);
             $result=mysql_query("SELECT * FROM users WHERE id=$id");
             if(mysql_errno())
             {
                 echo mysql_errno();
             }
             else 
             {
                 echo "连接成功";
             }
             echo "<br>--------------------------</br>";
             $result_arr=mysql_fetch_assoc($result);
         }
         else 
         {
             echo "学号不能为空";
         }


?>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $result_arr['name']?></title>

</head>

<body>
<form action="edituser_server.php" method="post">
<input type="hidden" name="editid" value="<?php echo $id?>" />
请输入修改后名字<br />
<input type="text" name="editname" value="<?php echo  $result_arr['name']?>" /><br />
请输入修改后年龄<br />
<input type="text" name="editage" value="<?php echo  $result_arr['age']?>"/><br />
请输入修改后性别<br />
<input type="text" name="editsex" value="<?php echo  $result_arr['sex']?>"/><br />
<input  type="submit" value="提交"  /><br />

</form>
<?php echo $id?>
</body>
</html>
