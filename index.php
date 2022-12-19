<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./layouts/link_css.php"; ?>
    <title>酒類介紹網</title>
</head>

<body class="row">
    <?php
    include "./db/db.php";
    $sql = "select * from winery_name";
    $alldate = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // dd($alldate);
    ?>
    <div class="mt-4 p-5 bg-danger text-white rounded">
        <h1>威士忌介紹</h1>
        <p>介紹經典，與近期好酒</p>
    </div>
    <div class="dropdown row">
        <button type="button" class="btn btn-link col"><a href="#">登入</a></button>
        <button type="button" class="btn btn-link col"><a href="#">討論區</a></button>
        <button type="button" class="btn btn-link col"><a href="#">投票區</a></button> 
        <button type="button" class="btn btn-link dropdown-toggle col" data-bs-toggle="dropdown">
            威士忌品牌
        </button>
        <ul class="dropdown-menu">
            <?php foreach ($alldate as $key => $value) { ?>
                <li><a class="dropdown-item" href="#"><?= $value['name'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <main class="container">

    </main>
    

    <?php
    include "./layouts/scrpits.php";
    ?>
</body>

</html>