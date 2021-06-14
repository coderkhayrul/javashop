<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::get();
        $orders = Order::get();
        $users = User::get();
        return view('admin.dashboard', compact('products', 'orders', 'users'));
    }
}
