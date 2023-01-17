<!-- 新版header標 -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container-fluid">
    <!-- 公司名稱 -->
    <a class="navbar-brand" href="#">WhiskeyWorld</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- 已登入區域 -->
        <?php if (isset($_SESSION['login'])) { ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./admin_center.php"><img title="首頁" style="width: 24px; height:24px" src="./icon/icons8-木屋-96.png" alt=""></a>
          </li>

          <!-- 縮減登出列 -->
          <!-- <li class="nav-item">
             <a class="nav-link" href="./logout.php">
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img title="登出" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png">
              </button>
               </a>
            </li> -->
          <!-- 縮減登出列結束。 -->

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
              <!-- <li class="nav-item">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <img title="登入" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png">
            </button>
            <a class="nav-link" href="./index.php?do=login"><img title="登入" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png"></a>
          </li> -->
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
            <button class="btn btn-outline-light" type="submit">Search</button>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img title="登出" style="width:24px;height:24px" src="./icon/icons8-登录右圆角-96.png">
              </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- 結束header。 -->
    <div class="container mt-4 p-5 text-white rounded" >
  <h1 class="mt-5" style="color:#E89B27; border-left:solid 16px #E89B27;padding-left:16px;" >威士忌介紹</h1>
  <p class="mx-2" style="color:gray;">介紹經典，與近期好酒</p>
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
  <div class="carousel-inner rounded-3">
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


<!-- 登出登入彈出式頁面。 -->
<?php if (isset($_SESSION['login'])) { ?>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">登出</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          你確定要登出嗎?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a class="nav-link" href="./logout.php">登出</a></button>
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">登入</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./api/logain_api.php" method="post">
            <div>
              <label for="">帳號</label>
              <input type="text" name="user">
            </div>
            <div>
              <label for="">密碼</label>
              <input type="password" name="pd" id="">
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">登入</button>
                <button type="button" class="btn btn-light"><a href="./index.php?do=new_user">註冊</a></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!-- 彈出式視窗結束。 -->
<?php
if (isset($_SESSION['bad'])) { ?>
<div class="alert alert-danger mx-auto w-50">
    趕快想起帳號吧!你錯了第<?=$_SESSION['bad']?>次
</div>
<?php } ?>