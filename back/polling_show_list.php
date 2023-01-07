<h1>顯示投票</h1>
<?php
$id = $_GET['id'];
// 取出poling表單中的poling_name。
$poling_id = ReadToTable("poling_name", "poling", "`id`='$id'");
$poling_name = ToSql($poling_id);
// 取出對應主題的poling_list。
$poling_list_id = ReadToTable("option_name", "poling_option", "`poling_id`='$id'");
$poling_list = ToSql($poling_list_id);
?>
<!-- 宣告主題，取出主題。 -->
<h1><?= $poling_name[0]['poling_name'] ?></h1>
<!-- 製作一個投票表格。 -->
<form action="./api/poling_in_vote_api.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <?php
    foreach ($poling_list as $key => $value) {
    ?>
        <div>
            <label><?=$value['option_name']?></label>
            <input type="radio" name="option_name" value="<?=$value['option_name']?>">
        </div>
    <?php
    }
    ?>
    <button>投票</button>
</form>