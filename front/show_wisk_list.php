<!-- 顯示威士忌介紹的網頁 -->
<?php
$wisk_num = $_GET['wisk'];
$sql = "select name from winery_name where `id`='$wisk_num'";
$Winery_name = $pdo->query($sql)->fetchColumn();
// 取出單字。
?>
<h1><?= $Winery_name ?></h1>

<?php
$test = ReadToTable("*", "whisky_name", "winery_id=$wisk_num");
dd($test);
$test2 = ToSql($test);
dd($test2);
?>

<div class="list-group">
    <?php foreach ($test2 as $key => $value) { ?>
        <a href="#" class="list-group-item list-group-item-action"><?= $value['whiskey_brand'] ?></a>
    <?php } ?>
</div>