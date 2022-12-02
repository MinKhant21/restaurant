<?php

namespace App\Http\Controllers\admin;

use App\Events\Order;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Tables;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){

        $data = Orders::with(['reservation'=>function($query){
            return $query->with(['items','tables'])->get();
        }])->where('is_complete','0')->get();

        return view('admin.dashboard', compact('data'));
    }
    function test(){
        event(new Order('this is pusher noti'));
        return "Event has been sent!";
    }
    function result(){
        return view('test');
    }
    function orderDetail($id){
        $data = Orders::with(['reservation'=>function($query){
            return $query->with(['items','tables'])->get();
        }])->where('id', $id)->firstOrFail();
        return view('admin.order.detail', compact('data'));
    }
    function orderComplete($id){
        Orders::where('id', $id)->update(['is_complete'=>1]);
        return redirect()->route('admin.dashboard');
    }
}
