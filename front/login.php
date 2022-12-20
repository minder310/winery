<div class='col-md-4 mx-auto my-5 p-5 border shadow-sm'>
    <h3 class='text-center'>會員登錄</h3>
    <form action="./api/logain_api.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user" >
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pd" id="">
        </div>
        <button type="submit">登入</button>
        <button><a href="./index.php?do=new_user">註冊</a></button>
    </form>