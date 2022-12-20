<h1>登入頁面API</h1>
<?php
include_once "../db/db.php";
$user = $_POST['user'];
$pd = $_POST['pd'];

echo $user;
echo $pd;

$sql = "select * from user where `user_name`='$user' && `user_password`='$pd'";
$user_array = $pdo->query($sql)->fetchColumn();
                                //這是回傳是否有這個數值，有回傳1，沒有回傳0
dd($user_array);
if ($user_array==1) {
    echo "if=1";
    $_SESSION['login'] = $user;
    // header("location:../index.php?do=login");
} else {
    echo "if=2";
    if (!isset($_SESSION['bad'])) {
        $_SESSION['bad'] = 1;
    } else {
        $_SESSION['bad'] +=1;
    }
    // header("location:../index.php?do=login");
}
