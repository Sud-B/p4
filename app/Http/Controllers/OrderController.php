<?php

namespace App\Http\Controllers;
use App\Order;

use Illuminate\Http\Request;

class OrderController extends Controller {
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
{
    /**$orders = orders::orderBy('name')->get();*/

    return view('orderinfo.index')/**->with([
        'orders' => $orders
    ])*/;
}
}
