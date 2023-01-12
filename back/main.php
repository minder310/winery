<!-- 宣告取出資料庫內容。 -->
<?php
  // 取出最大值id。
  $maxNumber=ToSql(ReadToTable("MAX(id)","whisky_name"));
  $num=$maxNumber[0]["MAX(id)"];
  $whisk;
  for($i=0;$i<3;$i++){
  $randnum=rand(1,$num);
  $whisk[]=ReadToTable("*","whisky_name","`id`='$randnum'");
  }
  // dd($whisk);
  $read;
  for($i=0;$i<3;$i++){
    $read[]=ToSql($whisk[$i]);
  }
  // dd($read);
?>
<!-- 取出資料結束。 -->
  <div class="mt-3 col-md-12 col-lg-4 col row justify-content-center">
    <div class="card" style="width:400px">
      <img  class="card-img-top" src="./upimg/<?= $read[0][0]["jpge_where"]?>" alt="Card image" style="width:261px; height:261px;">
      <div class="card-body">
        <h4 class="card-title"><?= $read[0][0]["whiskey_brand"]?></h4>
        <p class="card-text">價格:<?= $read[0][0]["price"]?>元</p>
        <a href="#" class="btn btn-primary">詳細資料</a>
      </div>
    </div>
  </div>
<div class="mt-3 col-md-12 col-lg-4 col row justify-content-center">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./upimg/<?= $read[1][0]["jpge_where"]?>" alt="Card image" style="width:261px; height:261px;">
    <div class="card-body">
      <h4 class="card-title"><?= $read[1][0]["whiskey_brand"]?></h4>
      <p class="card-text">價格:<?= $read[1][0]["price"]?>元</p>
      <a href="#" class="btn btn-primary">詳細資料</a>
    </div>
  </div>
</div>
<div class="mt-3 col-md-12 col-lg-4 col row justify-content-center">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./upimg/<?= $read[2][0]["jpge_where"]?>" alt="Card image" style="width:261px; height:261px;">
    <div class="card-body">
      <h4 class="card-title"><?= $read[2][0]["whiskey_brand"]?></h4>
      <p class="card-text">價格:<?= $read[2][0]["price"]?>元</p>
      <a href="#" class="btn btn-primary">詳細資料</a>
    </div>
  </div>
</div>