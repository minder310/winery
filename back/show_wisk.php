<!-- 顯示威士忌介紹的網頁 -->
<?php
// $wisk_num=$_GET['wisk'];
// $sql="select name from winery_name where `id`='$wisk_num'";
// $Winery_name=$pdo->query($sql)->fetchColumn();
//                                 // 取出單字。
?>
<!-- <h1><?=$Winery_name?></h1> -->
<?php
 // 接收傳值。
 $indo=$_GET['wisk'];
 //宣告查詢資料庫語法。
 $sql=ReadToTable("*","whisky_name","id=$indo");
 //讀取資料庫資料。  
 $ReadSql=ToSql($sql);
 //觀察陣列。  
 dd($ReadSql);
?>
<!-- 需要新增修改選項。 -->
<h1><?=$ReadSql[0]['whiskey_brand']?></h1>
<h3>價格:<?=$ReadSql[0]['price']?></h3>
<img style="width: 500px;" src="./upimg/<?=$ReadSql[0]['jpge_where']?>" alt="酒徒">
<p>
    <?=$ReadSql[0]['flavor']?>
</p>
<a href="./admin_center.php?do=show_wisk_change&wisk=<?=$indo?>">編輯</a>

