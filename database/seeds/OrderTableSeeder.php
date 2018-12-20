<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            ['Lentil soup', 'Ann Smith', 12 / 10 / 2018, 1015, 'complete'],
            ['Onion soup', 'Mary Smith', 12 / 10 / 2018, 1115, 'complete']
            //
        ];

        $count = count($orders);

        foreach ($orders as $key => $orderData) {
            $order = new Order();

            $order->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $order->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $order->order = $orderData[0];
            $order->name = $orderData[1];
            $order->date = $orderData[2];
            $order->pickuptime = orderData[3];
            $order->tatu = $orderData[4];

            $order->save();
            $count--;
        }
    }
}
