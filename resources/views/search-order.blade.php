<!DOCTYPE html>
<html>
    <head>
        <title>訂單查詢</title>
    </head>
    <body>
        <center>
        <font size="4">
        <form avtion="search-order" method="post">
            @csrf
            <h2>訂單查詢</h2>
            關鍵字：<input type="text" placeholder="請輸入關鍵字" name="searchword" required><p>
            <input type="submit" name="submit" value="搜尋">
            @if (Session::get('username') != 'root')
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            @else
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            @endif
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
                <td class="border border-black" align='center' valign="middle">動作</td>
            @foreach($orders as $order)
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{ $order->order_number }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->order_id }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->ct_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->finish_time }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->station }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $order->state }}</td>
                <td class="border border-black" align='center' valign="middle">
                    <a href="{{ route('show-order',$order->order_number) }}">詳細</a>
                    <a href="{{ route('edit-order',$order->order_number) }}">修改</a>
                    <a href="{{ route('del-order',$order->order_number ) }}">刪除</a>
                </td>
            </tr>
            @endforeach
           </table>
            @include('flash-message')
        </form>
        </font>
        </center>
    </body>
</html>
