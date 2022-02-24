<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * 新增訂單介面
     */
    public function addOrderIndex() {
        return view('add-order');
    }
    
    /**
     * 查詢訂單介面
     */
    public function searchOrderIndex() {
        //$orders = Order::all();
        //return view('search-order')->with('orders',$orders);
        return view('search-order')->withOrders(Order::all());

    }

    /**
     * 查詢指定訂單介面
     */
    public function searchOrder(Request $request) {
        $searchword=$request->input('searchword');
        $orders=Order::where('order_id',$searchword)->get();
        return view('search-order')->withOrders($orders);
    }

    /**
     * 顯示詳細訂單介面
     */
    public function showOrderIndex($order_number) {
            //return view("show-order");
            //$orders=Order::showOrder($order_number);
            $orders=Order::where('order_number',$order_number)->get();
            return view('show-order')->withOrders($orders);
    }
    /**
     * 顯示詳細訂單介面
     */
    public function showOrder($order_numer) {
        //$order = $request->put('order');
        //$order_number = 'search-order->order_number';
        //$orders=Order::where('order_number',$order_number)->get();
        //return view('show-order')->withOrder($order);
        //return view('show-order')->with($orders);
        //$orders=Order::showOrder($order);
        return view('show-order')->withOrder(Order::find($order_number));
    }

    /**
     * 顯示修改訂單介面
     */
    public function editOrderIndex(Request $request,$order_number) {
        $orders=Order::where('order_number',$order_number)->get();
        return view('edit-order')->withOrders($orders);
    }
    /**
     * 修改訂單
     */
    public function editOrder(Request $request) {
        $user=$request->session()->get('username');
        $order_number=$request->input('order_number');
        $order_id = $request->input('order_id');
        $create_time = $request->input('create_time');
        $finish_time = $request->input('finish_time');
        $station=$request->input('st');
        $state=$request->input('state');
        $station1=$request->input('station1');
        $st_date1=$request->input('st-date1');
        $people1=$request->input('people1');
        $station2=$request->input('station2');
        $st_date2=$request->input('st-date2');
        $people2=$request->input('people2');
        $station3=$request->input('station3');
        $st_date3=$request->input('st-date3');
        $people3=$request->input('people3');
        $station4=$request->input('station4');
        $st_date4=$request->input('st-date4');
        $people4=$request->input('people4');
        $station5=$request->input('station5');
        $st_date5=$request->input('st-date5');
        $people5=$request->input('people5');
        $station6=$request->input('station6');
        $st_date6=$request->input('st-date6');
        $people6=$request->input('people6');
        $station7=$request->input('station7');
        $st_date7=$request->input('st-date7');
        $people7=$request->input('people7');
        $station8=$request->input('station8');
        $st_date8=$request->input('st-date8');
        $people8=$request->input('people8');
        $station9=$request->input('station9');
        $st_date9=$request->input('st-date9');
        $people9=$request->input('people9');
        $station10=$request->input('station10');
        $st_date10=$request->input('st-date10');
        $people10=$request->input('people10');
        Order::editOrder($order_number,$order_id,$create_time,$finish_time,$station,$state,
        $station1,$st_date1,$people1,
        $station2,$st_date2,$people2,
        $station3,$st_date3,$people3,
        $station4,$st_date4,$people4,
        $station5,$st_date5,$people5,
        $station6,$st_date6,$people6,
        $station7,$st_date7,$people7,
        $station8,$st_date8,$people8,
        $station9,$st_date9,$people9,
        $station10,$st_date10,$people10);
        if($user=='root')
        {
            return view('adminlobby');
        }
        else
        {
            return view('lobby');
        }
    }
    /**
     * 新增訂單
     */
    public function addOrder(Request $request) {
        $order_id = $request->input('order_id');
        $create_time = $request->input('create_time');
        $finish_time = $request->input('finish_time');
        $station=$request->input('st');
        $state=$request->input('state');
        $station1=$request->input('station1');
        $st_date1=$request->input('st-date1');
        $people1=$request->input('people1');
        $station2=$request->input('station2');
        $st_date2=$request->input('st-date2');
        $people2=$request->input('people2');
        $station3=$request->input('station3');
        $st_date3=$request->input('st-date3');
        $people3=$request->input('people3');
        $station4=$request->input('station4');
        $st_date4=$request->input('st-date4');
        $people4=$request->input('people4');
        $station5=$request->input('station5');
        $st_date5=$request->input('st-date5');
        $people5=$request->input('people5');
        $station6=$request->input('station6');
        $st_date6=$request->input('st-date6');
        $people6=$request->input('people6');
        $station7=$request->input('station7');
        $st_date7=$request->input('st-date7');
        $people7=$request->input('people7');
        $station8=$request->input('station8');
        $st_date8=$request->input('st-date8');
        $people8=$request->input('people8');
        $station9=$request->input('station9');
        $st_date9=$request->input('st-date9');
        $people9=$request->input('people9');
        $station10=$request->input('station10');
        $st_date10=$request->input('st-date10');
        $people10=$request->input('people10');
        Order::addOrder($order_id,$create_time,$finish_time,$station,$state,
        $station1,$st_date1,$people1,
        $station2,$st_date2,$people2,
        $station3,$st_date3,$people3,
        $station4,$st_date4,$people4,
        $station5,$st_date5,$people5,
        $station6,$st_date6,$people6,
        $station7,$st_date7,$people7,
        $station8,$st_date8,$people8,
        $station9,$st_date9,$people9,
        $station10,$st_date10,$people10);
            return redirect("/add-order")->with('sussess','新增成功');
    }

    /**
     * 刪除訂單介面
     */
    public function delOrderIndex($order_number) {
        $orders=Order::where('order_number',$order_number)->get();
            return view('del-order')->withOrders($orders);
    }

    /**
     * 刪除訂單介面
     */
    public function delOrder(Request $request,$order_number) {
        $user=$request->session()->get('username');
        Order::delOrder($order_number);
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