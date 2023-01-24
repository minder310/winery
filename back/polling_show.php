<h1>顯示現有投票。</h1>
<?php
// 要顯示的標題跟，內容SQL宣告。
$sqlPolingName = ReadToTable("*", "poling");
// 載進SQl中。
$polingName = ToSql($sqlPolingName);
dd($polingName);

?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">投票主題</th>
            <th scope="col">開始時間</th>
            <th scope="col">結束時間</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($polingName as $key => $value) { ?>
            <tr>
                <th scope="row"><?= $value['id'] ?></th>
                <td>
                <a href="./admin_center.php?do=polling_show_list&id=<?= $value['id']; ?>">
                    <?= $value['poling_name'] ?>
                </a>
                </td>
                <td><?= $value['new_date'] ?></td>
                <td><?= $value['over_date'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>