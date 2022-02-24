<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\softDeletes;

class Order extends Model
{
    //use softDeletes;
    use HasFactory;
    protected $connection;
    protected $table = 'orders';
    protected $primaryKey = 'order_number';
    public $timestamps = false;
    //protected $dates = ['created_at','updated_at','deleted_at'];

    /**
     * 取出指定訂單資訊
     */
    public static function getOrderInfo($order_id){
        $rets = self::where('order_id',$order_id)
        ->get()
        ->toArray();
        return $rets;
    }
    /**
     * 取出所有訂單資訊
     */
    public static function getAllOrderInfo(){
        $rets = self::get()
        ->toArray();
        return $rets;
    }

    /**
     * 搜尋詳細訂單資訊
     */
    public static function showOrder($order_number){
        $rets = self::where('order_number',$order_number)
        ->get()
        ->toArray();
        return $rets;
    }

    /**
     * 修改訂單資訊
     */
    //public static function editOrder($order_number){
    //    $rets = self::where('order_number',$order_number)
    //    ->get()
    //    ->toArray();
    //    return $rets;
    //}

    /**
     * 新增訂單
     */
    public static function addOrder(
        $order_id,$create_time,$finish_time,$station,$state,
        $station1,$st_date1,$people1,
        $station2,$st_date2,$people2,
        $station3,$st_date3,$people3,
        $station4,$st_date4,$people4,
        $station5,$st_date5,$people5,
        $station6,$st_date6,$people6,
        $station7,$st_date7,$people7,
        $station8,$st_date8,$people8,
        $station9,$st_date9,$people9,
        $station10,$st_date10,$people10){
        $rets = self::insert([
            'order_id' => $order_id, 'ct_time' => $create_time, 'finish_time' =>$finish_time,'station' =>$station,'state'=>$state,
            'station1' =>$station1, 'station1_time' =>$st_date1, 's1change_user' =>$people1,
            'station2' =>$station2, 'station2_time' =>$st_date2, 's2change_user' =>$people2,
            'station3' =>$station3, 'station3_time' =>$st_date3, 's3change_user' =>$people3,
            'station4' =>$station4, 'station4_time' =>$st_date4, 's4change_user' =>$people4,
            'station5' =>$station5, 'station5_time' =>$st_date5, 's5change_user' =>$people5,
            'station6' =>$station6, 'station6_time' =>$st_date6, 's6change_user' =>$people6,
            'station7' =>$station7, 'station7_time' =>$st_date7, 's7change_user' =>$people7,
            'station8' =>$station8, 'station8_time' =>$st_date8, 's8change_user' =>$people8,
            'station9' =>$station9, 'station9_time' =>$st_date9, 's9change_user' =>$people9,
            'station10' =>$station10, 'station10_time' =>$st_date10, 's10change_user' =>$people10]);
            return $rets;
    }

    /**
     * 修改訂單
     */
    public static function editOrder(
        $order_number,$order_id,$create_time,$finish_time,$station,$state,
        $station1,$st_date1,$people1,
        $station2,$st_date2,$people2,
        $station3,$st_date3,$people3,
        $station4,$st_date4,$people4,
        $station5,$st_date5,$people5,
        $station6,$st_date6,$people6,
        $station7,$st_date7,$people7,
        $station8,$st_date8,$people8,
        $station9,$st_date9,$people9,
        $station10,$st_date10,$people10){
        $rets = self::where('order_number',$order_number)->update([
            'order_number' => $order_number,'order_id' => $order_id, 'ct_time' => $create_time, 'finish_time' =>$finish_time,'station' =>$station,'state'=>$state,
            'station1' =>$station1, 'station1_time' =>$st_date1, 's1change_user' =>$people1,
            'station2' =>$station2, 'station2_time' =>$st_date2, 's2change_user' =>$people2,
            'station3' =>$station3, 'station3_time' =>$st_date3, 's3change_user' =>$people3,
            'station4' =>$station4, 'station4_time' =>$st_date4, 's4change_user' =>$people4,
            'station5' =>$station5, 'station5_time' =>$st_date5, 's5change_user' =>$people5,
            'station6' =>$station6, 'station6_time' =>$st_date6, 's6change_user' =>$people6,
            'station7' =>$station7, 'station7_time' =>$st_date7, 's7change_user' =>$people7,
            'station8' =>$station8, 'station8_time' =>$st_date8, 's8change_user' =>$people8,
            'station9' =>$station9, 'station9_time' =>$st_date9, 's9change_user' =>$people9,
            'station10' =>$station10, 'station10_time' =>$st_date10, 's10change_user' =>$people10]);
            return $rets;
    }

    /**
     * 刪除訂單資訊
     */
    public static function delOrder($order_number){
        $rets = self::where('order_number',$order_number)->delete();
        return $rets;
    }

    /**
     * 計算訂單筆數
     */
    public static function countOrder($order_number){
        $rets = self::count('*');
        return $rets;
    }
}
