<h1>顯示現有投票。</h1>
<?php
// 要顯示的標題跟，內容SQL宣告。
$sqlPolingName=ReadToTable("*","poling");
// 載進SQl中。
$polingName=ToSql($sqlPolingName);
dd($polingName);

?>
<ul>
    <?php foreach($polingName as $key => $value){?>
        <a href="./admin_center.php?do=polling_show_list&id=<?=$value['id'];?>">
            <ol><?=$value['poling_name']?></ol>    
        </a>
    <?php } ?>
</ul>    