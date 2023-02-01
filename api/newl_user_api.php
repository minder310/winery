
<?php
include_once "../db/db.php";

$user=$_POST["user"];
$pd=$_POST['pd'];
$email=$_POST['email'];
$name=$_POST['name'];
echo $user;
echo $pd;
echo $email;
echo $name;
$sql="INSERT INTO `user`(`user_name`, `user_password`, `email`, `name`) VALUES ('$user','$pd','$email','$name')";
dd($sql);
$return=$pdo->exec($sql);
echo $return;
// 製作註冊網站完成。

?>