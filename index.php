<?php
 echo "用户添加的联系人信息如下:<br/>";
 foreach ($_POST as $key=>$value){
     echo $key.":".$value."<br/>";
 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加联系人</title>
</head>
<body>
<form action="" method="post">
    编号: <input type="text" name="id"><br>
    姓名: <input type="text" name="name"><br>
    公司: <input type="text" name="company"><br>
    地址: <input type="text" name="address"><br>
    电话: <input type="text" name="phone"><br>
    EMAIL: <input type="text" name="email"><br>
    <input type="submit" value="追加新联系人">
</form>
</body>
</html>