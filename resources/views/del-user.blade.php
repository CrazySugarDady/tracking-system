<!DOCTYPE html>
<html>
    <head>
        <title>刪除用戶</title>
    </head>
    <body>
        <center>
        <form avtion="del-user" method="post">
            @csrf
            <h2>刪除用戶</h2>
        <font size="4">
        <table class="table border border-black" width="300">
                <td class="border border-black" align='center' valign="middle">序號</td>
                <td class="border border-black" align='center' valign="middle">帳號</td>
                <td class="border border-black" align='center' valign="middle">密碼</td>
            @foreach($users as $user)
            <tr class="border border-black">
                <td class="border border-black" align='center' valign="middle">{{ $user->user_id }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $user->username }}</td>
                <td class="border border-black" align='center' valign="middle">{{ $user->password }}</td>
                </td>
            </tr>
            @endforeach
           </table><p>
            是否確定刪除此用戶？<p>
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