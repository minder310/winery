<?php
$id = $_GET['id'];
// // 測試區
// dd($_SESSION['vote_over']);
// dd($id);
// if($_SESSION['vote_over']>0){
//     header("location:admin_center.php?do=polling_over&votes_id=$id");
// }
// // 測試區結束。
// 取出poling表單中的poling_name。
$poling_id = ReadToTable("poling_name", "poling", "`id`='$id'");
$poling_name = ToSql($poling_id);
// 取出對應主題的poling_list。
$poling_list_id = ReadToTable("option_name", "poling_option", "`poling_id`='$id'");
$poling_list = ToSql($poling_list_id);
?>

<!-- 如果投過票自動轉跳區。 -->
<?php if(isset($_SESSION["poling$id"])){ ?>
    <meta http-equiv="refresh" content="0;url=./admin_center.php?do=polling_over&votes_id=<?=$id?>">
<?php } ?>
<!-- 判斷投過票自動轉跳區結束。 -->

<div class="card col-12 col-md-8 border border-warning mt-5">
    <form action="./api/poling_in_vote_api.php" method="POST">
        <div class="card-header row bg-warning">
            <h1 class="text-center"><?= $poling_name[0]['poling_name'] ?></h1>
        </div>
        <img src="" class="card-img-top" alt="">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="card-body">
            <?php
            foreach ($poling_list as $key => $value) {
            ?>
                <div class="row mt-2 border border-warning ">
                    <label class="text-center col-12 col-md-8"><?= $value['option_name'] ?></label>
                    <input class="col-12 col-md-4 mt-2 " style="height: 11px;" type="radio" name="option_name" value="<?= $value['option_name'] ?>">
                </div>
            <?php
            }
            ?>
        </div>
        <div class="text-center">
            <button>投票</button>
        </div>
    </form>
</div>