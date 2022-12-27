<h1>威士忌更新頁面。</h1>
<?php
$into=$_GET['wisk'];
$SqlData=ReadToTable("*","whisky_name","`id`='$into'");
dd($data);
$data=ToSql($SqlData);
dd($data);
?>
                                                                        <!-- 這個要背唷。 -->
<form action="./api/change_wisk_api.php?wisk=<?=$into?>" method="POST" enctype="multipart/form-data">
    
    <!-- <input type="hidden" name="id" value=" $data[0]['id'];"> -->
    <div>
        <label for="">酒名</label>
        <input type="text" name="whiskey_brand" value="<?= $data[0]['whiskey_brand']?>">
    </div>
    <div>
        <label for="">價格</label>
        <input type="number" name="price" value="<?= $data[0]['price']?>">
    </div>
    <div>
        <label for="">cp值</label>
        <input type="number" name="cp" value="<?= $data[0]['cp'] ?>">
    </div>
    <div>
        <label for="">內容</label>
        <textarea name="flavor"><?=$data[0]['flavor']?></textarea>
    </div>
    <div>
        <label for="">更新圖片</label>
        <input type="hidden" name="jpge_where" value="<?=$data[0]['jpge_where']?>">
        <input type="file" name="img" value="<?=$data[0]['jpge_where']?>">
    </div>
    <input type="submit" value="更新">
</form>