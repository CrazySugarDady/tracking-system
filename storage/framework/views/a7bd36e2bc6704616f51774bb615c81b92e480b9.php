<!DOCTYPE html>
<html>
    <head>
        <title>訂單追蹤系統登入</title>
    </head>
    <body>
        <center>
        <form avtion="login" method="post">
            <?php echo csrf_field(); ?>
            <h2>訂單追蹤系統登入</h2>
        <font size="4">
            名稱：<input type="text" placeholder="請輸入使用者名稱" name="username" required>
            <p>
            密碼：<input type="password" placeholder="請輸入使用者密碼" name="password" required>
            <p>
            <input type="submit" name="submit" value="登入">
            <input type="button" value="註冊" onclick="location.href='http://127.0.0.1:8000/register'">
        </font>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </center>
    </body>
</html>



<?php /**PATH /Users/crazyandy/test/test/resources/views/login.blade.php ENDPATH**/ ?>