<h1>投票區</h1>
    <button name="newinput">新增選項</button>
<form action="./api/new_poling_api.php" method="POST">
    <div>
        <label for="">主題</label>
        <input type="text" name="theme">
    </div>
    <div>
        <label for="">啟動</label>
        <input type="radio" name="on_off" id="">
        <label for="">關閉</label>
        <input type="radio" name="on_off" id="">
    </div>
    <div class="opt-div">
        <label for="">選項</label>
        <input type="text" name="opt[]">
    </div>
    <div>
        <input type="submit" value="儲存">
        <input type="reset" value="清空">
    </div>

</form>

<script>
    $(function(){
        // 綁定div。
        const div = $('.opt-div');
        // 綁定啟動按鍵
        const but = $('button[name=newinput]')
        // 顯示出綁定的div的內容。
        console.log ('div',div);
        // 複製物件，不放在function
        const inpClone=div.clone();
        but.click(function(){
            // 前面是獎物件貼到哪邊。
            inpClone.appendTo('.opt-div');
        })
    })
</script>