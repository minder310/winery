<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=winery";
// $dsn = "mysql:host=localhost;charset=utf8;dbname=s1110414";
$pdo = new PDO($dsn, 'root', '');
// $pdo = new PDO($dsn, 's1110414', 's1110414');
$sql = "select * from winery_name";
$alldate = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
date_default_timezone_set("Asia/Taipei");
session_start();

// 會顯示出你要輸出的內容。
function dd($input)
{
    echo "<pre>";
    print_r($input);
    echo "</pre>";
};

// 拿來讀取表單SQl語法生產的function。
//(顯示什麼，哪張表單，條件陣列。) 
function ReadToTable($SeeWhat, $FromWhere, ...$ida)
{
    if (isset($ida[0])) {
        $sql = "select $SeeWhat from $FromWhere where " . join(" && ", $ida);
    } else {
        $sql = "select $SeeWhat from $FromWhere";
    }
    return $sql;
}

// 讀取資料庫的function
// 輸入的SQL語法，後面的是輸出幾行。
function ToSql($sql, ...$a)
{
    global $pdo;
    if (!isset($a[0])) {
        $SqlDate = $pdo->query($sql)->fetchall(PDO::FETCH_ASSOC);
    } else {
        $SqlDate = $pdo->query($sql)->fetchColumn();
    }
    return $SqlDate;
}


//輸入資料庫用function else下面有說明書。 
function InPutWiskName($TableName, $key, $valu)
{
    global $pdo;
    if (isset($key[0]) && isset($valu[0])) {
        foreach ($key as $k => $v) {
            $key[$k] = "`" . $v . "`";
        }
        // dd($key);
        foreach ($valu as $k => $v) {
            $valu[$k] = "'" . $v . "'";
        }
        // dd($valu);        
        $sql = "INSERT INTO $TableName (" . join(",", $key) . ")VALUES(" . join(",", $valu) . ")";
    } else {
        echo "InPutWiskName(表單名稱,欄位(陣列),輸入資料(陣列))";
        echo "請參考詳細用法感恩。";
    }
    //  dd($sql);
    $num = $pdo->exec($sql);
    return $num;
}

// 更新表單資料。要更新的表單，更新資料，條件，條件。PS:條件預設是id。
function ChangWisk($table, $indata, $id , $where)
{
    echo "測試輸出";
    dd($indata);
    global $pdo;
    $sql = "update `$table` set ";
    if (is_array($indata)) {
        $mix = [];
        foreach ($indata as $key => $value) {
            $mix[] = "`$key` = '$value'";
        }
        // dd($mix);
        $sql = $sql . join(",", $mix);
        // dd($sql);
    } else {
        echo "我有跑唷";
        $sql=$sql.$indata;    
    }
    $sql = $sql . " where `$id`='$where'";
    dd($sql);
    //  dd($sql);
    $num=$pdo->exec($sql);
    return $num;
}
