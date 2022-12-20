<h1>註冊頁面</h1>
<div>
    <form action="./api/newl_user_api.php" method="POST">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pd" id="">
        </div>
        <div>
            <label for="">E-Mail</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" id="">
        </div>
        <button type="submit">送出</button>
        <button type="reset">重置</button>
    </form>
</div>