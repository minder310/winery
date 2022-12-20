<h1>show wisk 頁面。</h1>
<?php
$wisk_num=$_GET['wisk'];
$sql="select name from winery_name where `id`='$wisk_num'";
$Winery_name=$pdo->query($sql)->fetchColumn();
                                // 取出單字。
dd($Winery_name);
?>