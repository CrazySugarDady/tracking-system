<!DOCTYPE html>
<html>
    <head>
        <title>訂單詳細</title>
    </head>
    <body>
        <center>
        <font size="4">
        <form avtion="show-order" method="post">
            @csrf
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
                @foreach($orders as $order)
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{ $order->order_number }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->order_id }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->ct_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->finish_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->state }}</td>
                </td>
            </tr>
            @endforeach
           </table><p>
           <table class="table border border-black" width="600">
                <td class="border border-black" align='center' valign="middle">加工站名稱</td>
                <td class="border border-black" align='center' valign="middle">預計完成日期</td>
                <td class="border border-black" align='center' valign="middle">交接人</td>
                @if($order->station==1)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                @elseif($order->station==2)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                @elseif($order->station==3)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                @elseif($order->station==4)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                @elseif($order->station==5)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                @elseif($order->station==6)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station6}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station6_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s6change_user }}</td>
                @elseif($order->station==7)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station6}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station6_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s6change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station7}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station7_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s7change_user }}</td>
                @elseif($order->station==8)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station6}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station6_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s6change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station7}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station7_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s7change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station8}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station8_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s8change_user }}</td>
                @elseif($order->station==9)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station6}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station6_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s6change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station7}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station7_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s7change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station8}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station8_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s8change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station9}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station9_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s9change_user }}</td>
                @elseif($order->station==10)
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station1}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station1_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s1change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station2}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station2_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s2change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station3}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station3_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s3change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station4}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station4_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s4change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station5}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station5_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s5change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station6}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station6_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s6change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station7}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station7_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s7change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station8}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station8_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s8change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station9}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station9_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s9change_user }}</td>
                <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{$order->station10}}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station10_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->s10change_user }}</td>
                </td>
            </tr>
            @endif
            </table>
            @if (Session::get('username') != 'root')
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            @else
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            @endif
            @include('flash-message')
        </form>
        </font>
        </center>
    </body>
</html>
