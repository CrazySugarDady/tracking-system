<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    /**
     * 管理使用者介面
     */
    public function editUserIndex(Request $request) {
        $users = User::all();
        $user=User::countUser('*');
        $request->session()->put('user',$user);
        return view('edit-user')->with('users',$users);
    }
    //顯示登入畫面
    public function loginIndex(){return view('login');}
    //使用者登入
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $getUser = User::getUserInfo($username);
        $order=Order::countOrder('*');
        $count = count($getUser);

        if ($count == 0)
        {
            return redirect("/")->with('error','無此使用者');
        }
        if($username == $getUser[0]['username'] && $password == $getUser[0]['password'])
        {
            $request->session()->put('username',$username);
            $request->session()->put('user_id',$getUser[0]['user_id']);
            $request->session()->put('order',$order);
            if($username != 'root')
            {
                $username = 'user';
            }
            return redirect("/lobby/{$username}");
        }
        else
        {
            return redirect("/")->with('error','密碼錯誤');
        }
    }
    //登出使用者
    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect("/");
    }
    //顯示註冊畫面
    public function registerIndex(){return view('register');}
    //註冊使用者，用count判斷，如果是1表示註冊過，0表示沒有
    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $getUser = User::getUserInfo($username);
        $count = count($getUser);

        if($count ==1)
        {
            return redirect("/register")->with('error','該使用者以重複');
        }
        else
        {
            User::registerUser($username, $password);
            return redirect("/register")->with('sussess','註冊成功');
        }
    }
    //修改密碼畫面
    public function editPasswordIndex(){return view('edit-password');}
    //修改密碼
    public function editPassword(Request $request)
    {
        $username = $request->session()->get('username');
        $password = $request->input('password');
        $getUserInfo = User::getUserInfo($username);
        $oldPassword = $getUserInfo[0]['password'];

        if($password == $oldPassword)
        {
            return redirect("/edit-password")->with('error','密碼重複');
        }
        else
        {
            User::editPassword($username, $password);
            return redirect("/edit-password")->with('sussess','修改成功');
        }
    }

    /**
     * 刪除用戶介面
     */
    public function delUserIndex($user_id) {
        $user=User::where('user_id',$user_id)->get();
            return view('del-user')->withUsers($user);
    }

    /**
     * 刪除用戶
     */
    public function delUser(Request $request,$user_id) {
        $user=$request->session()->get('username');
        User::delUser($user_id);
        if($user=='root')
        {
            return view('adminlobby');
        }
        else
        {
            return view('lobby');
        }
    }
}
