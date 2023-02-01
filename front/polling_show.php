<!-- <h1>顯示現有投票。</h1> -->
<?php
// 要顯示的標題跟，內容SQL宣告。
$sqlPolingName = ReadToTable("*", "poling");
// 載進SQl中。
$polingName = ToSql($sqlPolingName);
// dd($polingName);

?>
<table class="table table-striped table-warning">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">投票主題</th>
            <th scope="col">開始時間</th>
            <th scope="col">結束時間</th>
            <!-- <th scope="col">啟動</th>
            <th scope="col">儲存</th> -->

        </tr>
    </thead>
    <tbody>
        <?php foreach ($polingName as $key => $value) { ?>
            <tr>
                <th scope="row"><?= $value['id'] ?></th>
                <td>
                    <a href="./index.php?do=polling_over&id=<?= $value['id'] ?>">
                        <?= $value['poling_name'] ?>
                    </a>
                </td>
                <td><?= $value['new_date'] ?></td>
                <td><?= $value['over_date'] ?></td>
                <!-- 是否啟動 -->
                <!-- <form action="./api/change_poling_api.php?id=<?= $value['id']; ?>" method="post">
                    <td>
                        <label class="form-label col-2 mx-auto" for="">啟動</label>
                        <input style="height: 15px;" class="col-1 mt-2 mx-auto" type="radio" name="on_off" id="" value="1" <?php if($value['no_off']==1)echo "checked"; ?>>
                        <label class="form-label col-2 mx-auto" for="">關閉</label>
                        <input style="height: 15px;" class="col-1 mt-2 mx-auto" type="radio" name="on_off" id="" value="0" <?php if($value['no_off']==0)echo "checked"; ?>>
                    </td>
                    <td>
                        <button>儲存</button>
                    </td>
                </form> -->
            </tr>
        <?php } ?>
    </tbody>
</table>