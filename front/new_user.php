<div class="w-25 border border-2 rounded-3 border-warning my-5">
    <h1 style="text-align: center;">註冊頁面</h1>
    <form action="./api/newl_user_api.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="">帳號</label>
            <input class="form-control" type="text" name="user">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">密碼</label>
            <input class="form-control" type="password" name="pd" id="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">E-Mail</label>
            <input class="form-control" type="email" name="email" id="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">姓名</label>
            <input class="form-control" type="text" name="name" id="">
        </div>
        <button class="btn btn-warning" type="submit">送出</button>
        <button class="btn btn-warning" type="reset">重置</button>
    </form>
</div>
