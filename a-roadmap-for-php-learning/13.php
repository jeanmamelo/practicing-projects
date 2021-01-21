<?php
//customer’s total orders
App\Order::where('customer_id', $customer_id)->sum('total')->get();
// cupcakes in an order
App\Order::find($order_id)->cupcakes;
// cupcakes that are on special
App\Order::where('on_special', true)->order('price')->get();