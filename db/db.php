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
// 拿來讀取表單SQl語法生產的function。
                //(顯示什麼，哪張表單，條件陣列。) 
function ReadToTable($SeeWhat,$FromWhere,...$ida){
    if(isset($ida[0])){
        $sql="select $SeeWhat from $FromWhere where ".join(" && ",$ida); 
    }else{
        $sql="select $SeeWhat from $FromWhere";
    }
    return $sql;
}
// 讀取資料庫的function
        // 輸入的SQL語法，後面的是輸出幾行。
function ToSql($sql,...$a){
    global $pdo;
    if(!isset($a[0])){
    $SqlDate=$pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);
    }else{
    $SqlDate=$pdo->query($sql)->fetchColumn();
    }
    return $SqlDate;
}

?>