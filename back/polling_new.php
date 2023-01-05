<h1>投票區</h1>
    <button name="newinput">新增選項</button>
<form action="./api/new_poling_api.php" method="POST">
    <div>
        <label for="">主題</label>
        <input type="text" name="theme">
    </div>
    <div>
        <label for="">啟動</label>
        <input type="radio" name="on_off" id="" value="1">
        <label for="">關閉</label>
        <input type="radio" name="on_off" id="" value="0">
    </div>
    <div class="opt-div">
        <label for="">選項</label>
        <input type="text" name="opt[]">
        <button type="button" id="del">刪除選項</button>
    </div>
    <div>
        <input type="submit" value="儲存">
        <input type="reset" value="清空">
    </div>

</form>

<script>
    $(function(){
        // 綁定區。
        const form= $('form');
        const div = $('.opt-div');
        const but = $('button[name=newinput]');
        const dle = $('#del');
        // 顯示出綁定的div的內容。
        console.log ('div',div);
        // 複製物件，不放在function
        console.log ("div",div)
        let a = 1;
        but.click(function(){
            // 前面是將物件貼到哪邊，後面是貼什麼物件。
            const inpClone=$('.opt-div').last().clone(true);
            div.append(inpClone);
        })

        dle.click(function(){
             console.log('OK in function');
             $(this).parent().remove();
        })
        
        
    })
</script>