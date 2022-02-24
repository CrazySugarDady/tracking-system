<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>修改訂單</title>
    </head>
    <body>
        <center>
        <form avtion="edit-order" method="post">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2>修改訂單</h2>
            <font size="4">     
            訂單序號：<input type="text" name="order_number" value="<?php echo e($order->order_number); ?>" readonly>
            <p>
            訂單編號：<input type="text" placeholder="請輸入訂單編號" name="order_id" value="<?php echo e($order->order_id); ?>" required>
            <p>
            建立日期：<input type="date" name="create_time" value="<?php echo e($order->ct_time); ?>" required>
            <p>
            交貨日期：<input type="date" name="finish_time" value="<?php echo e($order->finish_time); ?>" required>
            <p>
            加工站數：<select id="station" name="st" onchange="ChangeDisabled()">
                <option>請選擇加工站數</option>
                <option value="1" <?php if($order->station=='1'): ?> selected <?php endif; ?>>1</option>
                <option value="2" <?php if($order->station=='2'): ?> selected <?php endif; ?>>2</option>
                <option value="3" <?php if($order->station=='3'): ?> selected <?php endif; ?>>3</option>
                <option value="4" <?php if($order->station=='4'): ?> selected <?php endif; ?>>4</option>
                <option value="5" <?php if($order->station=='5'): ?> selected <?php endif; ?>>5</option>
                <option value="6" <?php if($order->station=='6'): ?> selected <?php endif; ?>>6</option>
                <option value="7" <?php if($order->station=='7'): ?> selected <?php endif; ?>>7</option>
                <option value="8" <?php if($order->station=='8'): ?> selected <?php endif; ?>>8</option>
                <option value="9" <?php if($order->station=='9'): ?> selected <?php endif; ?>>9</option>
                <option value="10" <?php if($order->station=='10'): ?> selected <?php endif; ?>>10</option>
            </select><p>
            <script language="javascript">
            function ChangeDisabled()//value
            {
            var x=document.getElementById('station').value;
            document.getElementById("How_station").innerHTML="";
            for(var i=1;i<=x;i++)
            {
                if(i==1){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station1); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station1_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s1change_user); ?>' ><p>";}
                if(i==2){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station2); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station2_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s2change_user); ?>' ><p>";}
                if(i==3){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station3); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station3_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s3change_user); ?>' ><p>";}
                if(i==4){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station4); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station4_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s4change_user); ?>' ><p>";}
                if(i==5){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station5); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station5_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s5change_user); ?>' ><p>";}
                if(i==6){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station6); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station6_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s6change_user); ?>' ><p>";}
                if(i==7){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station7); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station7_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s7change_user); ?>' ><p>";}
                if(i==8){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station8); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station8_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s8change_user); ?>' ><p>";}
                if(i==9){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station9); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station9_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s9change_user); ?>' ><p>";}
                if(i==10){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='<?php echo e($order->station10); ?>' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='<?php echo e($order->station10_time); ?>' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='<?php echo e($order->s10change_user); ?>' ><p>";}
            }
            }
            </script>
            完成狀態：<select id="state" name="state">
                <option>請選擇進度狀況</option>
                <option value="未完成" <?php if($order->state=='未完成'): ?> selected <?php endif; ?>>未完成</option>
                <option value="加工中" <?php if($order->state=='加工中'): ?> selected <?php endif; ?>>加工中</option>
                <option value="已完成" <?php if($order->state=='已完成'): ?> selected <?php endif; ?>>已完成</option>
                <option value="已出貨" <?php if($order->state=='已出貨'): ?> selected <?php endif; ?>>已出貨</option>
            </select>
            <p id="How_station"></p>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>
    </body>
</html>
<?php
echo "<script>ChangeDisabled()</script>";
?>

<?php /**PATH /Users/crazyandy/test/test/resources/views/edit-order.blade.php ENDPATH**/ ?>