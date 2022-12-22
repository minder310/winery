<!-- 顯示威士忌介紹的網頁 -->
<h1>威士忌輸入區</h1>
<form action="./api/wisk_name_api.php" method="post" enctype="multipart/form-data">
    <!-- 隱藏輸入酒廠的數據。 -->
    <label for="">請選擇酒廠</label>
    <!-- 測試區 -->
    <select name="winery_id" id="">
        <?php foreach ($alldate as $key => $value) { ?>
            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
        <?php } ?>
    </select>
    <!-- 測試區結束 -->
    <div>
        <label for="">酒名<input type="text" name="name"></label>
    </div>
    <div>
        <label for="">價格<input type="number" name="price"></label>
    </div>
    <div>
        <label for="">cp值<input type="number" name="cp"></label>
    </div>
    <div>
        <label for="">評價<textarea name="flavor" id=""></textarea></label>
    </div>
    <div>
        <!-- 如果有上傳圖片，一定使用post，因為get沒有辦法傳陣列檔。 -->
        <label for="">上傳圖片</label>
        <input type="file" name="img">
    </div>
    <button type="submit">寫入</button>
</form>