<div class="container mt-4 p-5 bg-danger text-white rounded">
    <h1>威士忌介紹</h1>
    <p>介紹經典，與近期好酒</p>
</div>

<!-- 輪播創建。 -->
<div id="demo" class="container carousel slide" data-bs-ride="carousel" style="height:100ox;">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-danger"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-danger"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-danger"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./jpge/01.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
            <img src="./jpge/02.jpg" alt="Chicago" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
            <img src="./jpge/03.jpg" alt="New York" class="d-block" style="width:100%">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev col" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next col" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- 輪播程式碼結束。 -->

<?php
if (!$_SESSION['login']) {
?>
    <div class="dropdown row mx-auto container ">
        <button type="button" class="btn btn-link col col-sm-2"><a href="./index.php?do=main">回首頁</a></button>
        <button type="button" class="btn btn-link col col-sm-2"><a href="./index.php?do=login">登入</a></button>
        <button type="button" class="btn btn-link col col-sm-2"><a href="#">討論區</a></button>
        <button type="button" class="btn btn-link col col-sm-2"><a href="#">投票區</a></button>
        <button type="button" class="btn btn-link dropdown-toggle col col-sm-2" data-bs-toggle="dropdown">
            威士忌品牌
        </button>
        <ul class="dropdown-menu">
            <?php foreach ($alldate as $key => $value) { ?>
                <li><a class="dropdown-item" href="./index.php?do=show_wisk_list&wisk=<?= ($key + 1) ?>"><?= $value['name'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
<?php } else { ?>
    <div class="dropdown row mx-auto container bg-danger rounded">
        <button type="button" class="btn btn-link col col-sm-2 offset-md-1"><a href="./admin_center.php"><img title="首頁" style="width: 24px; height:24px" src="./icon/icons8-木屋-96.png" alt=""></a></button>
        <button type="button" class="btn btn-link col col-sm-2 "><a href="./logout.php"><img title="登出" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png"></a></button>
        <button type="button" class="btn btn-link col col-sm-2 "><a href="./admin_center.php?do=polling_new"><img title="天氣" style="height: 24px;width:24px;" src="./icon/icons8-cloudshot.gif" alt=""></a></button>
        <button type="button" class="btn btn-link col col-sm-2 "><a href="./admin_center.php?do=polling_show"><img title="投票管理" style="width: 24px;height:24px;" src="./icon/icons8-票-96.png" alt=""></a></button>
        <button type="button" class="btn btn-link dropdown-toggle col col-sm-2  " data-bs-toggle="dropdown">
            <img title="酒廠介紹" style="width: 24px; height:24px;" src="./icon/icons8-葡萄酒瓶-96.png" alt="">
        </button>
        <ul class="dropdown-menu">
            <?php foreach ($alldate as $key => $value) { ?>
                <li><a class="dropdown-item" href="./admin_center.php?do=show_wisk_list&wisk=<?= ($key + 1) ?>"><?= $value['name'] ?></a></li>
            <?php } ?>
            <li><a class="dropdown-item" href="./admin_center.php?do=InTheNewWisk">新增威士忌</a></li>
        </ul>
    </div>
<?php } ?>