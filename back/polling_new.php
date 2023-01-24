<h1>投票區</h1>
<div class="col-12 col-md-4 mx-auto">
    <div class="mx-auto col-4 col-md-4 row">
        <button class="btn btn-warning mx-auto" name="newinput">新增選項</button>
    </div>
    <form action="./api/new_poling_api.php" method="POST">
        <div class="col-mb-3 row">
            <label class="form-label col-8" for="">主題</label>
            <input class="form-control" type="text" name="theme">
        </div>
        <div class="col-mb-3 row">
            <label class="form-label col-2 mx-auto" for="">啟動</label>
            <input style="height: 15px;" class="col-1 mt-2 mx-auto" type="radio" name="on_off" id="" value="1">
            <label class="form-label col-2 mx-auto" for="">關閉</label>
            <input style="height: 15px;" class="col-1 mt-2 mx-auto" type="radio" name="on_off" id="" value="0">
        </div>
        <div class="opt-div col-mb-3 row">
            <label class="form-label" for="">選項</label>
            <input class="form-control col-8" type="text" name="opt[]">
            <button class="btn btn-warning mx-auto col-4 mt-2" type="button" id="del">刪除選項</button>
        </div>
        <div class="col-mb-3 row mt-2">
            <input class="btn btn-warning col-4 mx-auto mt-2" type="submit" value="儲存">
            <input class="btn btn-warning col-4 mx-auto mt-2" type="reset" value="清空">
        </div>

    </form>
</div>

<script>
    $(function() {
        // 綁定區。
        const form = $('form');
        const div = $('.opt-div');
        const but = $('button[name=newinput]');
        const dle = $('#del');
        // 顯示出綁定的div的內容。
        console.log("div", div);
        // 複製物件，不放在function
        console.log("div", div);
        let a = 1;
        but.click(function() {
            // 前面是將物件貼到哪邊，後面是貼什麼物件。
            const inpClone = $('.opt-div').last().clone(true);
            div.append(inpClone);
        })

        dle.click(function() {
            console.log('OK in function');
            $(this).parent().remove();
        })


    })
</script>