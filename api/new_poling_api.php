
<?php
include "../db/db.php";
$a =$_POST;
dd($a);
// 傳post，主題。
$theme[]=$_POST['theme'];
// 傳是否啟動。
$on_off[]=$_POST['on_off'];
// 傳選項。
$opt=$_POST['opt'];
// 宣告要輸入的表單，表格名稱。
$poling_name[]="poling_name";
// 宣告需要的
$on_off_name[]="no_off";
InPutWiskName("poling",$poling_name,$theme);
InPutWiskName("poling",$on_off_name,$on_off);
$Maxidsql=ReadToTable("MAX(id)","poling");
dd($Maxidsql);
$maxid=ToSql($Maxidsql);
dd($maxid);
// 宣告要導入的表格。
$option[]="option_name";
// 轉換陣列格式。
InPutWiskName("poling",$option,$maxid[0])
?>