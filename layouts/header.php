<!-- 新版header標 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <!-- 公司名稱 -->
    <a class="navbar-brand" href="#">WhiskeyWorld</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- 已登入區域 -->
        <?php if ($_SESSION['login']) { ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./admin_center.php"><img title="首頁" style="width: 24px; height:24px" src="./icon/icons8-木屋-96.png" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./logout.php"><img title="登出" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin_center.php?do=polling_new"><img title="天氣" style="height: 24px;width:24px;" src="./icon/icons8-cloudshot.gif" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin_center.php?do=polling_show"><img title="投票管理" style="width: 24px;height:24px;" src="./icon/icons8-票-96.png" alt=""></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img title="酒廠介紹" style="width: 24px; height:24px;" src="./icon/icons8-葡萄酒瓶-96.png" alt="">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($alldate as $key => $value) { ?>
                <li><a class="dropdown-item" href="./admin_center.php?do=show_wisk_list&wisk=<?= ($key + 1) ?>"><?= $value['name'] ?></a></li>
              <?php } ?>
              <li><a class="dropdown-item" href="./admin_center.php?do=InTheNewWisk">新增威士忌</a></li>
            </ul>
          </li>
        <?php } else { ?>
          <!-- 未登入區域 -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php?do=main"><img title="首頁" style="width: 24px; height:24px" src="./icon/icons8-木屋-96.png" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php?do=login"><img title="登入" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin_center.php?do=polling_new"><img title="天氣" style="height: 24px;width:24px;" src="./icon/icons8-cloudshot.gif" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin_center.php?do=polling_show"><img title="投票管理" style="width: 24px;height:24px;" src="./icon/icons8-票-96.png" alt=""></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img title="酒廠介紹" style="width: 24px; height:24px;" src="./icon/icons8-葡萄酒瓶-96.png" alt="">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($alldate as $key => $value) { ?>
                <li><a class="dropdown-item" href="./admin_center.php?do=show_wisk_list&wisk=<?= ($key + 1) ?>"><?= $value['name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>
        <?php } ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- 結束header。 -->
<div class="container mt-4 p-5 bg-danger text-white rounded">
  <h1>威士忌介紹</h1>
  <p>介紹經典，與近期好酒</p>
</div>

<!-- 輪播創建。 -->
<div id="demo" class="container carousel slide p-0" data-bs-ride="carousel" style="height:100ox;">

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

