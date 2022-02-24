<!DOCTYPE html>
<html>
    <head>
        <title>訂單追蹤系統帳號註冊</title>
    </head>
    <body>
        <center>
        <font size="4">
        <form avtion="login" method="post">
            <?php echo csrf_field(); ?>
            <h2>訂單追蹤系統帳號註冊</h2>
            名稱：<input type="text" placeholder="請輸入使用者名稱" name="username" required>
            <p>
            密碼：<input type="password" placeholder="請輸入使用者密碼" name="password" required>
            <p>
            <input type="submit" name="submit" value="註冊">
            <input type="button" value="回登入畫面" onclick="location.href='http://127.0.0.1:8000'">
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </font>
        </center>
    </body>
</html><?php /**PATH /Users/crazyandy/test/test/resources/views/register.blade.php ENDPATH**/ ?>