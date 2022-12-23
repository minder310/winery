<!-- 顯示威士忌介紹的網頁 -->
<?php
$wisk_num=$_GET['wisk'];
$sql="select name from winery_name where `id`='$wisk_num'";
$Winery_name=$pdo->query($sql)->fetchColumn();
                                // 取出單字。
?>
<h1><?=$Winery_name?></h1>
<?php
$sql=ReadToTable("*","whisky_name","winery_id=$wisk_num");
$ReadSql=ToSql($sql);
dd($ReadSql);
?>
<ul class="list-group">
  <li class="list-group-item active">酒名</li>
  <?php foreach($ReadSql as $key => $vaule){?>
  <a href="./admin_center.php?do=show_wisk&wisk=<?=$vaule['id']?>"><li class="list-group-item"><?=$vaule['whiskey_brand']?></li></a>
  <?php }?>
</ul>
