<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>訂單追蹤系統</title>
    </head>
    <body>
            <center>
            <font size="4">
            <?php echo csrf_field(); ?>
            <h2>訂單追蹤系統大廳</h2>
            <?php echo e(Session::get('username')); ?>，您好！，共有筆訂單資料，<a href="<?php echo e(route('logout')); ?>">登出</a>
            <p>
            <a href="<?php echo e(route('edit-password')); ?>">更改密碼</a><p>
            <a href="<?php echo e(route('add-order')); ?>">新增訂單</a><p>
            <a href="<?php echo e(route('search-order')); ?>">搜尋訂單</a><p>
            </p>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </font>
            </center>
    </body>
</html><?php /**PATH /Users/crazyandy/test/test/resources/views//lobby.blade.php ENDPATH**/ ?>