<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AllOrders;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
    return view('order.index',compact('order'));
    }

    public function show($orderId)
    {
        $order = Order::where('user_id',Auth::user()->id)->where('id',$orderId)->first();
        if($order){
            return view('order.view',compact('order'));

        }else{
             return redirect()->back()->with('message','No Order Found');
        }
    return view('order',compact('order'));
    }

    public function order(){

        $order = Order::all();

        return view('admin.orders.index', compact('order'));
    }

    public function showadmin($orderId)
    {
        $order = Order::where('id',$orderId)->first();
        if($order){
            return view('admin.orders.view',compact('order'));

        }else{
             return redirect()->back()->with('message','No Order Found');
        }
    return view('admin.orders.index',compact('order'));
    }
}
