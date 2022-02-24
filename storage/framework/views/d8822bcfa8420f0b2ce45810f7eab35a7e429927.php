<!DOCTYPE html>
<html>
    <head>
        <title>刪除訂單</title>
    </head>
    <body>
        <center>
        <form avtion="del-order" method="post">
            <?php echo csrf_field(); ?>
            <h2>刪除訂單</h2>
        <font size="4">
        <table class="table border border-black" width="600">
                <td class="border border-black" align='center' valign="middle">序號</td>
                <td class="border border-black" align='center' valign="middle">訂單編號</td>
                <td class="border border-black" align='center' valign="middle">建立時間</td>
                <td class="border border-black" align='center' valign="middle">出貨時間</td>
                <td class="border border-black" align='center' valign="middle">總製程數</td>
                <td class="border border-black" align='center' valign="middle">狀態</td>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->order_number); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->order_id); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->ct_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->finish_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->state); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </table><p>
            是否確定刪除此筆訂單？<p>
            <input type="submit" name="submit" value="刪除">
            <?php if(Session::get('username') != 'root'): ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            <?php else: ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            <?php endif; ?>
        </font>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </center>
    </body>
</html><?php /**PATH /Users/crazyandy/test/test/resources/views/del-order.blade.php ENDPATH**/ ?>