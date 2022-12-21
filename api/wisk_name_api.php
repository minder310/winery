<h1>將資料寫入資料庫API</h1>
<?php
include_once "../db/db.php";
$winery_id=$_GET['winery_id'];
$name=$_GET['name'];
$price=$_GET['price'];
$cp=$_GET['cp'];
$flavor=$_GET['flavor'];
$jpge=$_GET['jpge'];
$num=InPutWiskName("whisky_name",["winery_id","whiskey_brand","price","cp","flavor","jpge_where"],[$winery_id,$name,$price,$cp,$flavor,$jpge]);
echo $num;
?>