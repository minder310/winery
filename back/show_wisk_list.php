<!-- 顯示威士忌介紹的網頁 -->
<?php
$wisk_num = $_GET['wisk'];
$sql = "select name from winery_name where `id`='$wisk_num'";
$Winery_name = $pdo->query($sql)->fetchColumn();
// 取出單字。
?>
<h1><?= $Winery_name ?></h1>
<?php
$sql = ReadToTable("*", "whisky_name", "winery_id=$wisk_num");
$ReadSql = ToSql($sql);
// dd($ReadSql);
?>
<!--                  最小尺寸    大於md分成兩格。   paind-0 -->
<div class="container row-cols-1 row-cols-md-2 row p-0">
  <?php foreach ($ReadSql as $key => $vaule) { ?>
    <?php if($key==0||$key%2==0){?>
      <div class="card mb-3 col" >
        <div class="row g-0">
          <div class="col-md-4 col-12">
            <img style="width: 260px;height: 260px;" src="./upimg/<?=$vaule["jpge_where"]?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $vaule['whiskey_brand'] ?></h5>
              <p class="card-text">價格:<?= $vaule['price']?>元</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="./admin_center.php?do=show_wisk&wisk=<?= $vaule['id'] ?>" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    <?php }else{ ?>
      <div class="card mb-3 col" >
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $vaule['whiskey_brand'] ?></h5>
              <p class="card-text">價格:<?= $vaule['price']?>元</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="./admin_center.php?do=show_wisk&wisk=<?= $vaule['id'] ?>" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="col-md-4">
            <img style="width: 260px; height: 260px;" src="./upimg/<?=$vaule["jpge_where"]?>" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>
</div>