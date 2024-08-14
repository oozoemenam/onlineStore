<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData['title'] = 'Orders - Online Store';
        $viewData['subtitle'] = 'Orders';
        // $viewData['orders'] = Order::where('user_id', Auth::user()->getId())->get();
        $viewData['orders'] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('account.orders')->with('viewData', $viewData);
    }
}