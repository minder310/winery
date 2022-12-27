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
    <div>
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
        const inputs = $('input[name=opt]');
        const div = $('div');
        const but = $('button[name=newinput]')
        console.log ('div',div);
        console.log ('input',inputs)
        const inpClone=inputs.clone();
        but.click(function(){
            inpClone.insertAfter(input[name=opt]);
        })
    })
</script>