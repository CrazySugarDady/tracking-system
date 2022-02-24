<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>修改密碼</title>
        <font size="4">
    </head>
    <body>
        <form action="edit-password" method="post">
            <center>
            <?php echo csrf_field(); ?>
            <h2>修改密碼</h2>
            密碼：<input type="password" name="password" required>
            <p>
            <input type="submit" name="submit" value="修改">
            <?php if(Session::get('username') != 'root'): ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            <?php else: ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            <?php endif; ?>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </font>
            </center>
        </form>
    </body>
</html><?php /**PATH /Users/crazyandy/test/test/resources/views/edit-password.blade.php ENDPATH**/ ?>