<!-- 顯示威士忌介紹的網頁 -->
<h1>威士忌輸入區</h1>
<form action="./api/wisk_name_api.php" method="get">
    <!-- 隱藏輸入酒廠的數據。 -->
    <label for="">請選擇酒廠</label>
    <!-- 測試區 -->
    <select name="winery_id" id="">
        <?php foreach ($alldate as $key => $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name']?></option>
        <?php } ?>
    </select>
    <!-- 測試區結束 -->
    <label for="">酒名</label>
    <input type="text" name="name">
    <label for="">價格</label>
    <input type="number" name="price">
    <label for="">cp值</label>
    <input type="number" name="cp">
    <label for="">評價</label>
    <textarea name="flavor" id=""></textarea>
    <label for="">上傳圖片</label>
    <input type="text" name="jpge">
    <button type="submit">寫入</button>
</form>