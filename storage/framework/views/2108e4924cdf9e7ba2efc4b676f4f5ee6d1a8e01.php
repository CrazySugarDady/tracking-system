<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>管理使用者</title>
    </head>
    <body>
        <form action="edit-user" method="post">
        <font size="4">
            <center>
            <?php echo csrf_field(); ?>
            <h2>管理使用者</h2>
            共有<?php echo e(Session::get('user')); ?>筆用戶資料<p>
            <table class="table border border-black" width="300">
                <td class="border border-black" align='center' valign="middle">序號</td>
                <td class="border border-black" align='center' valign="middle">帳號</td>
                <td class="border border-black" align='center' valign="middle">密碼</td>
                <td class="border border-black" align='center' valign="middle">動作</td>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($user->user_id); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($user->username); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($user->password); ?></td>
                <td class="border border-black" align='center' valign="middle">
                    <a href="<?php echo e(route('del-user',$user->user_id )); ?>">刪除</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </table>
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
</html><?php /**PATH /Users/crazyandy/test/test/resources/views/edit-user.blade.php ENDPATH**/ ?>