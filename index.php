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
     
    // dd($alldate);
    // 大標頭部區。
    include "./layouts/header.php";
    ?>


    <main class="container row  mx-auto justify-content-center">
        <?php
        // 宣告按下去後do帶回來的值。
        if (isset($_GET['do'])) {
            $index_main = $_GET['do'];
        }

        // 判斷$index_main有沒有資料，如果沒有就導回首業。
        if (isset($index_main)) {
            include "./front/" . $index_main . ".php";
        } else {
            include "./front/main.php";
        }
        ?>
    </main>


    <?php
    include "./layouts/scrpits.php";
    ?>
</body>

</html>