<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=winery";
$pdo=new PDO($dsn,'root','');

date_default_timezone_set("Asia/Taipei");
session_start();

// 會顯示出你要輸出的內容。
function dd($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
};
?>