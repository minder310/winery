<!-- 顯示威士忌介紹的網頁 -->
<?php
// $wisk_num=$_GET['wisk'];
// $sql="select name from winery_name where `id`='$wisk_num'";
// $Winery_name=$pdo->query($sql)->fetchColumn();
//                                 // 取出單字。
?>
<!-- <h1><?=$Winery_name?></h1> -->
<?php

// 測試取資料地區。
    $indo=$_GET['wisk'];
    
// 測試取資料區結束。
 $sql=ReadToTable("*","whisky_name","id=$indo");
 $ReadSql=ToSql($sql);
 dd($ReadSql);
?>
<h1><?=$ReadSql[0]['whiskey_brand']?></h1>
<h3>價格:<?=$ReadSql[0]['price']?></h3>
<img style="width: 500px;" src="./upimg/<?=$ReadSql[0]['jpge_where']?>" alt="酒徒">
<p>
    <?=$ReadSql[0]['flavor']?>
</p>
