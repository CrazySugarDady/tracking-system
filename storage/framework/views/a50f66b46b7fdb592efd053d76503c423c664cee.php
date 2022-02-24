<!DOCTYPE html>
<html>
    <head>
        <script language="javascript">
        function ChangeDisabled()//value
        {
            var x=document.getElementById('station').value;
            document.getElementById("How_station").innerHTML="";
            for(var i=1;i<=x;i++)
            {
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"'>"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"'><p>";
            }
        }
        </script>
        <meta http-equiv="Content-Type" content="text/html" charset="uft-8">
        <title>新增訂單</title>
    </head>
    <body>
        <center>
        <form action="add-order" method="post">
            <?php echo csrf_field(); ?>
            <h2>新增訂單</h2>
            <font size="4">
            <p>
            訂單編號：<input type="text" placeholder="請輸入訂單編號" name="order_id" required>
            <p>
            建立日期：<input type="date" name="create_time" required>
            <p>
            交貨日期：<input type="date" name="finish_time" required>
            <p>
            加工站數：<select id="station" name="st" onchange="ChangeDisabled()">
                <option>請選擇加工站數</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select><p>
            完成狀態：<select id="state" name="state">
                <option>請選擇進度狀況</option>
                <option value="未完成">未完成</option>
                <option value="加工中">加工中</option>
                <option value="已完成">已完成</option>
                <option value="已出貨">已出貨</option>
            </select>
            <p id="How_station"></p>
            <p>
            <input type="submit" name="submit" value="新增">
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
</html>
<?php
echo "<script>ChangeDisabled()</script>";
?>

<?php /**PATH /Users/crazyandy/test/test/resources/views/add-order.blade.php ENDPATH**/ ?>