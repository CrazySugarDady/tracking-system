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
            @csrf
            <h2>管理使用者</h2>
            共有{{Session::get('user')}}筆用戶資料<p>
            <table class="table border border-black" width="300">
                <td class="border border-black" align='center' valign="middle">序號</td>
                <td class="border border-black" align='center' valign="middle">帳號</td>
                <td class="border border-black" align='center' valign="middle">密碼</td>
                <td class="border border-black" align='center' valign="middle">動作</td>
            @foreach($users as $user)
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{ $user->user_id }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $user->username }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $user->password }}</td>
                <td class="border border-black" align='center' valign="middle">
                    <a href="{{ route('del-user',$user->user_id ) }}">刪除</a>
                </td>
            </tr>
            @endforeach
           </table>
            @if (Session::get('username') != 'root')
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/user'">
            @else
            <input type="button" value="回大廳" onclick="location.href='http://127.0.0.1:8000/lobby/root'">
            @endif
            @include('flash-message')
        </font>
            </center>
        </form>
    </body>
</html>