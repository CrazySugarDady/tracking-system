<!DOCTYPE html>
<html>
    <head>
        <title>刪除訂單</title>
    </head>
    <body>
        <center>
        <form avtion="del-order" method="post">
            @csrf
            <h2>刪除訂單</h2>
        <font size="4">
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
            </tr>
            @endforeach
           </table><p>
            是否確定刪除此筆訂單？<p>
            <input type="submit" name="submit" value="刪除">
            @if (Session::get('username') != 'root')
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            @else
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            @endif
        </font>
            @include('flash-message')
        </form>
        </center>
    </body>
</html>