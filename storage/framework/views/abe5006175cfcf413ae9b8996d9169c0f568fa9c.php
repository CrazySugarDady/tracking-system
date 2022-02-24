<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>管理員介面</title>
    </head>
    <body>
            <center>
            <?php echo csrf_field(); ?>
            <h2>管理員大廳</h2>
            <font size="4">
            <?php echo e(Session::get('username')); ?>，您好！，共有<?php echo e(Session::get('order')); ?>筆訂單資料，<a href="<?php echo e(route('logout')); ?>">登出</a>
            <p>
            <a href="<?php echo e(route('edit-password')); ?>">更改密碼</a><p>
            <a href="<?php echo e(route('add-order')); ?>">新增訂單</a><p>
            <a href="<?php echo e(route('search-order')); ?>">查詢訂單</a><p>
            <a href="<?php echo e(route('edit-user')); ?>">管理使用者</a>
            </p>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </font>
            </center>
    </body>
</html><?php /**PATH /Users/crazyandy/test/test/resources/views/adminlobby.blade.php ENDPATH**/ ?>