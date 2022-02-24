<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;

class LobbyController extends Controller
{
    /**
     * 顯示大廳介面
     */
    public function lobbyIndex(Request $request) {
        $username = $request->session()->get('username');
        $getUserInfo = User::getUserInfo($username);
        $order=Order::countOrder('*');
        if ($username == 'root') {
            return view('adminlobby',compact('getUserInfo','order'));
        } else {
            return view('lobby',compact('getUserInfo','order'));
        }
    }
}