
<?php
include "../db/db.php";
$a = $_POST;
dd($a);
// 傳主題與是否啟動。
$theme_onoff = [$_POST['theme'], $_POST['on_off']];
// 傳選項。
$opt = $_POST['opt'];
// 宣告要輸入的表單，表格名稱。
$poling_name_onoff = ["poling_name", "no_off"];
// 宣告需要的
InPutWiskName("poling", $poling_name_onoff, $theme_onoff);

// 取出最id最大值。
$Maxidsql = ReadToTable("MAX(id)", "poling");
// dd($Maxidsql);
$maxid = ToSql($Maxidsql);
$bigid[] = $maxid[0]["MAX(id)"];
// dd($bigid);


// 宣告要導入的表格。
$option = ["poling_id", "option_name"];

// 用foretch輸入多組選項，進入投票系統。
foreach ($opt as $key => $value) {

    $bigid[1] = $value;
    dd($bigid);
    InPutWiskName("poling_option", $option, $bigid);
}

echo "請製作回投票成功頁面。";
?>