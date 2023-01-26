<h1>表單顯示</h1>
<?php
    include "../db/db.php";
    dd($_POST);
    dd($_GET);
    $id=$_GET['id'];
    $onoff=$_POST['on_off'];
    ChangWisk('poling',['no_off'=>$onoff],"id",$id);
    header("location:../admin_center.php?do=polling_show");