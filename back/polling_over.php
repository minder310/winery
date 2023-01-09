<h1>顯示票選結果</h1>
<?php
// 取出投票主題，與數值。
$get = $_GET;
$sql = ReadToTable("*", "poling_option", "`poling_id`={$get['votes_id']}");
$readSql = (ToSql($sql));
$sum=0;
foreach($readSql as $key => $value){
    $sum+=$value['vote'];
}
?>
<tr>

    <?php
    foreach ($readSql as $key => $value) {
    ?>
    <div>
        <td><?= $value['option_name']?></td>
        <td>投票數<?= $value['vote']?></td>
        <td>占比<?= ($value['vote']/$sum*100)?></td>
    </div>
        
    <?php } ?>
    <tr>總票數</tr>
    <tr><?= $sum ?></tr>
</tr>