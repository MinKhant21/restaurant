<?php

namespace App\Http\Controllers\api;

use App\Events\Order;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Items;
use App\Models\Orders;
use App\Models\Reservation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    function getCategories(){
        $data = Categories::withCount('items')->get();
        return response(['success'=>true, 'data' => $data]);
    }
    function getItems(int $id){
        $data = Items::with('categories')->where('categories_id' , $id)->get();
        return response(['success'=>true, 'data' => $data]);
    }
    function order(Request $request){
        $v = Validator::make($request->all(), [
            'table_id' => 'required|integer',
        ]);
        if($v->fails()){
            return response(['success'=>false, 'error' => $v->errors()], 400);
        }
        try{
           
            $order_code = rand(111111,999999);
            $order = Orders::create([
                'code' => $order_code,
            ]);
    
            foreach($request->items as $item){
                Reservation::create([
                    'tables_id' => (int) $request->table_id,
                    'items_id' => (int)$item['id'],
                    'orders_id' => $order->id,
                    'quantity' => $item['quantity'],
                ]);
            }
            event(new Order('this is pusher noti'));
            return response(['success'=>true], 200);
            
        }catch(Exception $e){
            return response($e, 400);
        }
        // return response(['success'=>true]);

    }
    function getConfirmedItems($table){
        $data = Reservation::with('items')->where('tables_id',$table)->get();
        return response(['success'=>true, 'data' => $data], 200);
    }
}
