<h1>將資料寫入資料庫API</h1>
<?php
include_once "../db/db.php";
$winery_id = $_POST['winery_id'];
$name = $_POST['name'];
$price = $_POST['price'];
$cp = $_POST['cp'];
$flavor = $_POST['flavor'];
// $jpge=$_GET['jpge'];
// 上傳圖片處理區。
if ($_FILES['img']['error'] == 0) {
    $files = explode('.', $_FILES['img']['name']);
    $files_name = end($files);
    dd($files);
    dd($files_name);
    dd(date("YmdHis"));
    $_FILES['img']['name'] = date("YmdHis") . "." . $files_name;
    dd($_FILES['img']);
    move_uploaded_file($_FILES['img']['tmp_name'], "../upimg/" . $_FILES['img']['name']);
}
// ========結束上傳圖片處裡========
$num = InPutWiskName("whisky_name", ["winery_id", "whiskey_brand", "price", "cp", "flavor", "jpge_where"], [$winery_id, $name, $price, $cp, $flavor, $_FILES['img']['name']]);
// echo $num;
?>