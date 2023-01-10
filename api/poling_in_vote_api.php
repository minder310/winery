<!-- 步驟   
        1.先取出投票數
        2.確認ID並且，輸入跟表單id確認。
        3.把數值加加回去。
        4.並儲存回資料庫中。
 -->
<?php
include_once "../db/db.php";
$vote = $_POST;
// 以下為取出原投票數。
$id = $_POST['id'];
$name = $_POST['option_name'];
$voteToSql = ReadToTable("*", "poling_option", "`poling_id`='$id'", "`option_name`='$name'");
$votes = ToSql($voteToSql);
dd($votes);
$votes_num = $votes[0]["votes"];
$votes_id = $votes[0]["id"];

// 取出陣列數值，並進行改變。
$votes_num++;
dd($votes_num);
$indate = ['votes' => $votes_num];
dd($indate);
// dd($_SESSION['vote_over']);
// 要是投票投過，就回直接導去結果畫面。
if ($_SESSION['vote_over'] > 0) {
        header("location:../admin_center.php?do=polling_over&votes_id=$id");
} else {
        // 以下為把數值塞回去。
        ChangWisk("poling_option", $indate, "id", "$votes_id");
}
// 宣告投過票。
$_SESSION['vote_over'] = 1;

// 紀錄票數成功。

// 測試宣告
header("location:../admin_center.php?do=polling_over&votes_id=$id")
?>