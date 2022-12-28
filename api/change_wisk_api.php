<?php
include_once "../db/db.php";
echo "更新酒資料頁面。";
// 以下為更新資料庫語法地區。
$postkey=$_POST;
$wisk=$_GET['wisk'];
$sql=ChangWisk("whisky_name",$postkey,$wisk);
//更新資料庫結束。

// 以下為更新圖片區。
if($_FILES['img']['error']==0){
    $files=explode(".",$_FILES['img']['name']);
    $files_end=end($files);
    echo "end";
    $files_name=$postkey['jpge_where'];
    $files_name_explod=explode('.',$files_name);
    $files_name=reset($files_name_explod);
    $files_name=$files_name.".".$files_end;
    $_FILES['img']['name']=$files_name;
    move_uploaded_file($_FILES['img']['tmp_name'],"../upimg/".$files_name);
}
$sql=ChangWisk("whisky_name"," `jpge_where` = '$files_name' ",$wisk);
// 更新圖片節資料庫資料結束。
?>