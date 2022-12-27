<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./layouts/link_css.php"; ?>
    <title>酒類介紹網</title>
</head>

<body>
    <?php
    include "./db/db.php";
    // 貪婪之島驅逐區，要是沒有念舊回地球去吧。
    if(!isset($_SESSION['login'])){
        header("location:index.php");
    };
    // 驅逐結束。
    $sql = "select * from winery_name";
    $alldate = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // dd($alldate);
    // 大標頭部區。
    include "./layouts/header.php";
    ?>
    <main class="container">
        <?php
        // 宣告按下去後do帶回來的值。
        if(isset($_GET['do'])){
        $index_main = $_GET['do'];
        }

        // 判斷$index_main有沒有資料，如果沒有就導回首業。
        if (isset($index_main)) {
            include "./back/" . $index_main . ".php";
        } else {
            include "./back/main.php";
        };
        ?>

    </main>
    <?php
    include "./layouts/scrpits.php";
    ?>
</body>

</html>