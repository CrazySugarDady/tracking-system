<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="uft-8">
        <title>訂單追蹤系統</title>
    </head>
    <body>
            <center>
            <font size="4">
            @csrf
            <h2>訂單追蹤系統大廳</h2>
            {{Session::get('username')}}，您好！，共有{{Session::get('order')}}筆訂單資料，<a href="{{ route('logout') }}">登出</a>
            <p>
            <a href="{{ route('edit-password') }}">更改密碼</a><p>
            <a href="{{ route('add-order') }}">新增訂單</a><p>
            <a href="{{ route('search-order') }}">搜尋訂單</a><p>
            </p>
            @include('flash-message')
            </font>
            </center>
    </body>
</html>