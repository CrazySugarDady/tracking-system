<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;

    protected $connection;
    protected $table = 'User';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    /**
     * 取出指定使用者資訊
     */
    public static function getUserInfo($username){
        $rets = self::where('username',$username)
        ->get()
        ->toArray();
        return $rets;
    }

    /**
     * 取出所有使用者資訊
     */
    public static function getAllUserInfo(){
        $rets = self::get()
        ->toArray();
        return $rets;
    }

    /**
     * 註冊使用者
     */
    public static function registerUser($username, $password){
        $rets = self::insert(['username' => $username, 'password' => $password]);
        return $rets;
    }

    /**
     * 修改密碼
     */
    public static function editPassword($username, $password){
        $rets = self::where('username',$username)
        ->update(['password' => $password]);
        return $rets;
    }
    /**
     * 修改使用者密碼API
     */
    public static function loginApi($username,$password,$newPassword) {
        $rets = self::where('username',$username)
        ->where('password',$password)
        ->update(['password'=>$newPassword]);
        return $rets;
    }

    /**
     * 刪除用戶資訊
     */
    public static function delUser($user_id){
        $rets = self::where('user_id',$user_id)->delete();
        return $rets;
    }

    /**
     * 計算用戶筆數
     */
    public static function countUser($user_id){
        $rets = self::count('*');
        return $rets;
    }
}
