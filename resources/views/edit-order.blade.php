<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>修改訂單</title>
    </head>
    <body>
        <center>
        <form avtion="edit-order" method="post">
            @csrf
            @foreach($orders as $order)
            <h2>修改訂單</h2>
            <font size="4">     
            訂單序號：<input type="text" name="order_number" value="{{ $order->order_number }}" readonly>
            <p>
            訂單編號：<input type="text" placeholder="請輸入訂單編號" name="order_id" value="{{ $order->order_id }}" required>
            <p>
            建立日期：<input type="date" name="create_time" value="{{ $order->ct_time }}" required>
            <p>
            交貨日期：<input type="date" name="finish_time" value="{{ $order->finish_time }}" required>
            <p>
            加工站數：<select id="station" name="st" onchange="ChangeDisabled()">
                <option>請選擇加工站數</option>
                <option value="1" @if($order->station=='1') selected @endif>1</option>
                <option value="2" @if($order->station=='2') selected @endif>2</option>
                <option value="3" @if($order->station=='3') selected @endif>3</option>
                <option value="4" @if($order->station=='4') selected @endif>4</option>
                <option value="5" @if($order->station=='5') selected @endif>5</option>
                <option value="6" @if($order->station=='6') selected @endif>6</option>
                <option value="7" @if($order->station=='7') selected @endif>7</option>
                <option value="8" @if($order->station=='8') selected @endif>8</option>
                <option value="9" @if($order->station=='9') selected @endif>9</option>
                <option value="10" @if($order->station=='10') selected @endif>10</option>
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
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station1}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station1_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s1change_user}}' ><p>";}
                if(i==2){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station2}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station2_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s2change_user}}' ><p>";}
                if(i==3){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station3}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station3_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s3change_user}}' ><p>";}
                if(i==4){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station4}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station4_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s4change_user}}' ><p>";}
                if(i==5){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station5}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station5_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s5change_user}}' ><p>";}
                if(i==6){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station6}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station6_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s6change_user}}' ><p>";}
                if(i==7){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station7}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station7_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s7change_user}}' ><p>";}
                if(i==8){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station8}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station8_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s8change_user}}' ><p>";}
                if(i==9){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station9}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station9_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s9change_user}}' ><p>";}
                if(i==10){
                document.getElementById("How_station").innerHTML +=
                "工作站"+i+"名稱：<input placeholder='請輸入工作站名稱' name='station"+i+"' value='{{$order->station10}}' required>"+
                "工作站"+i+"完成日期：<input type='date' name='st-date"+i+"' value='{{$order->station10_time}}' >"+
                "工作站"+i+"交接人名稱：<input placeholder='請輸入交接人名稱' name='people"+i+"' value='{{$order->s10change_user}}' ><p>";}
            }
            }
            </script>
            完成狀態：<select id="state" name="state">
                <option>請選擇進度狀況</option>
                <option value="未完成" @if($order->state=='未完成') selected @endif>未完成</option>
                <option value="加工中" @if($order->state=='加工中') selected @endif>加工中</option>
                <option value="已完成" @if($order->state=='已完成') selected @endif>已完成</option>
                <option value="已出貨" @if($order->state=='已出貨') selected @endif>已出貨</option>
            </select>
            <p id="How_station"></p>
            <p>
            <input type="submit" name="submit" value="修改">
            @if (Session::get('username') != 'root')
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            @else
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            @endif
            @include('flash-message')
        </font>
        </center>
        @endforeach
        </form>
    </body>
</html>
<?php
echo "<script>ChangeDisabled()</script>";
?>

