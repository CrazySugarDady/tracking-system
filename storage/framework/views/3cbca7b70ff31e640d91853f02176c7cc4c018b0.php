<!DOCTYPE html>
<html>
    <head>
        <title>訂單詳細</title>
    </head>
    <body>
        <center>
        <font size="4">
        <form avtion="show-order" method="post">
            <?php echo csrf_field(); ?>
            <h2>訂單詳細</h2>
            <style>
            .td{width:200px;}
            </style>
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
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </table><p>
           <table class="table border border-black" width="600">
                <td class="border border-black" align='center' valign="middle">加工站名稱</td>
                <td class="border border-black" align='center' valign="middle">預計完成日期</td>
                <td class="border border-black" align='center' valign="middle">交接人</td>
                <?php if($order->station==1): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <?php elseif($order->station==2): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <?php elseif($order->station==3): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <?php elseif($order->station==4): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <?php elseif($order->station==5): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <?php elseif($order->station==6): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s6change_user); ?></td>
                <?php elseif($order->station==7): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s6change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s7change_user); ?></td>
                <?php elseif($order->station==8): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s6change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s7change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s8change_user); ?></td>
                <?php elseif($order->station==9): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s6change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s7change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s8change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station9); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station9_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s9change_user); ?></td>
                <?php elseif($order->station==10): ?>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station1_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s1change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station2_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s2change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station3_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s3change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station4_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s4change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station5_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s5change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station6_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s6change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station7_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s7change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station8_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s8change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station9); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station9_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s9change_user); ?></td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station10); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->station10_time); ?></td>
                <td class="border border-black" align='center' valign="middle"><?php echo e($order->s10change_user); ?></td>
                </td>
            </tr>
            <?php endif; ?>
            </table>
            <?php if(Session::get('username') != 'root'): ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            <?php else: ?>
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            <?php endif; ?>
            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </font>
        </center>
    </body>
</html>
<?php /**PATH /Users/crazyandy/test/test/resources/views//show-order.blade.php ENDPATH**/ ?>