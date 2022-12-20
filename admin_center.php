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
    $sql = "select * from winery_name";
    $alldate = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // dd($alldate);
    // 大標頭部區。
    include "./layouts/header.php";
    ?>
    <main class="container">

        
    </main>
<?php
    include "./layouts/scrpits.php";
    ?>
</body>

</html>