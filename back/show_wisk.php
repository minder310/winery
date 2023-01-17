<!-- 顯示威士忌介紹的網頁 -->
<?php
// $wisk_num=$_GET['wisk'];
// $sql="select name from winery_name where `id`='$wisk_num'";
// $Winery_name=$pdo->query($sql)->fetchColumn();
//                                 // 取出單字。
?>
<!-- <h1><?= $Winery_name ?></h1> -->
<?php
// 接收傳值。
$indo = $_GET['wisk'];
//宣告查詢資料庫語法。
$sql = ReadToTable("*", "whisky_name", "id=$indo");
//讀取資料庫資料。  
$ReadSql = ToSql($sql);
//觀察陣列。  
//  dd($ReadSql);
?>
<!-- 需要新增修改選項。 -->
<div class="row">
    <div class="col-12 col-md-7">
        <img style="width: 500px;height: 500px;" class="mx-auto" src="./upimg/<?= $ReadSql[0]['jpge_where'] ?>" alt="酒徒">
    </div>
    <div class="col-12 col-md-7 offset-md-5" style="background-color: #E8900C;margin-top:-100px;">
        <h1 style="text-align: center;" class="pt-5 text-light"><?= $ReadSql[0]['whiskey_brand'] ?></h1>
        <h3 style="text-align: center;" class="text-light">價格:<?= $ReadSql[0]['price'] ?></h3>
        <p class="text-light p-5 fs-5 lh-lg">
            <?= $ReadSql[0]['flavor'] ?>
        </p>
    </div>
</div>
<a href="./admin_center.php?do=show_wisk_change&wisk=<?= $indo ?>">編輯</a>