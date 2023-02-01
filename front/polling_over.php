<h1>顯示票選結果</h1>
<?php
// 取出投票主題，與數值。
$get = $_GET;
$sql = ReadToTable("*", "poling_option", "`poling_id`={$get['id']}");
$readSql = (ToSql($sql));
$polingId = $readSql[0]['poling_id'];
$sum = 0;
foreach ($readSql as $key => $value) {
    $sum += $value['votes'];
}
?>
    
<tr>

    <?php
    foreach ($readSql as $key => $value) {
    ?>
        <div>
            <td><?= $value['option_name'] ?></td>
            <td>投票數<?= $value['votes'] ?></td>
            <td>占比<?= ($value['votes'] / $sum * 100) ?></td>
        </div>

    <?php } ?>
    <tr>總票數</tr>
    <tr><?= $sum ?></tr>
</tr>
<!-- <script>
    // 宣告，如果已經投過票會告知投票人，票數不算。
    <?php if ($_SESSION["poling$polingId"] > 0) { ?>
        window.alert("你已經投過票了唷。");
    <?php } ?>
</script> -->