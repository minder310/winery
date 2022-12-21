<!-- 顯示威士忌介紹的網頁 -->
<?php
$wisk_num=$_GET['wisk'];
$sql="select name from winery_name where `id`='$wisk_num'";
$Winery_name=$pdo->query($sql)->fetchColumn();
                                // 取出單字。
?>
<h1><?=$Winery_name?></h1>
<form action="" method="get">
    <label for="" name="name"></label>
    
</form>