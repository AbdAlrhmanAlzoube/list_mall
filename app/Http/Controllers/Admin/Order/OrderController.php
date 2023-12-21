<?php
namespace App\Http\Controllers\Admin\Order;


use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('Admin.orders.index', compact('orders'));
    }
    public function show(Order $order)
    {
        return view('Admin.orders.show_order', compact('order'));
    }

    
}